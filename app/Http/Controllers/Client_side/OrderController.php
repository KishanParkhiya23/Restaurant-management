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
        // $userId = session()->get('Ulogin');

        // $foodId = $id;
        // $quantity = $request->quantity;

        // $data = Cart::where('user_id', $userId)->where('confirmed', 0)->first();

        return view('client_side.addtocart');

        // $orderData = json_decode($data['order']);

        // $order = array($foodId, $quantity);
        // array_push($orderData, $order);

        // $order = json_encode($order);

        // Cart::create(['order' => $order, 'user_id' => $userId]);
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
