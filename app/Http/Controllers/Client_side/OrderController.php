<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order($id)
    {
        $item = Menu::find($id);
        return view('client_side.order', compact('item'));
    }

    public function addtocart(Request $request, $id)
    {
        $userId = session()->get('Ulogin');
        $foodId = $id;
        $quantity = $request->quantity;

        $data = Cart::where('food_id', $foodId)
            ->where('user_id', $userId)
            ->where('confirmed', 0)
            ->where('is_set', 1)
            ->first();

        if (!empty($data) && isset($data)) {
            Cart::whereId($data['id'])->update(['food_id' => $foodId, 'quantity' => $data['quantity'] += $quantity, 'user_id' => $userId]);
        } else {
            Cart::create(['food_id' => $foodId, 'quantity' => $quantity, 'user_id' => $userId]);
        }

        return redirect(route('user.your-cart'));
    }

    public function yourCart()
    {
        $userId = session()->get('Ulogin');
        $food = get_cart();
        return view('client_side.addtocart', compact('food'));
    }

    public function removeItem($id)
    {
        $userId = session()->get('Ulogin');

        Cart::where('user_id', $userId)
            ->where('food_id', $id)
            ->where('confirmed', 0)
            ->delete();
        return response()->json(['success' => true]);
    }

    public function saveOrder(Request $request)
    {
        // create unique order id
        do {
            $orderId = 'order' . rand(10000, 99999);
            $checkId = Order::where('orderId', $orderId)->first();
        } while (isset($checkId));

        date_default_timezone_set("Asia/Calcutta");     // set time zone for get current indian time

        $total = 0;
        $cartFood = get_cart();

        foreach ($cartFood as $food) {
            $total += ($food->foods->prize) * ($food['quantity']);

            // set orders in order item table from cart table
            OrderItem::create([
                'order_id' => $orderId,
                'product_id' => $food['food_id'],
                'quantity' => $food['quantity'],
                'user_id' => session()->get('Ulogin')
            ]);

            // change confirmation of items into cart table
            Cart::where('food_id', $food['food_id'])->update(['confirmed' => 1]);
        }

        // create new order in order table
        Order::create([
            'orderId' => $orderId,
            'date' => date("d-m-Y"),
            'time' => date("h:ia"),
            'items' => count($cartFood),
            'totalAmount' => $total
        ]);

        return redirect(route('user.menu'))->with('success', 'Order places succesfully');
    }

    public function yourorder()
    {
        return view('client_side.yourorder');
    }
    public function vieworder()
    {
        return view('client_side.vieworder');
    }


    public function changeCart(Request $request, $id)
    {
        Cart::whereId($id)->update(['quantity' => $request->value]);

        return response()->json(['success' => true]);
    }
}
