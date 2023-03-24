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

    public function yourorder()
    {
        $orders = Order::where('user_id', session()->get('Ulogin'))->orderBy('id', 'desc')->get();
        return view('client_side.yourorder', compact('orders'));
    }

    public function vieworder($id)
    {
        $food = OrderItem::where('user_id', session()->get('Ulogin'))->where('order_id', $id)->get();
        return view('client_side.vieworder', compact('food'));
    }


    public function changeCart(Request $request, $id)
    {
        Cart::whereId($id)->update(['quantity' => $request->value]);
        return response()->json(['success' => true]);
    }
}
