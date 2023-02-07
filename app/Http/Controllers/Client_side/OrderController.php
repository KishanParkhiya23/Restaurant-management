<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Menu;
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

        $food = Cart::where('user_id', $userId)
            ->where('confirmed', 0)
            ->where('is_set', 1)
            ->get();

        return view('client_side.addtocart', compact('food'));
    }

    public function yourorder()
    {
    return view('client_side.yourorder');
    }
    public function vieworder()
    {
    return view('client_side.vieworder');
    }

}
