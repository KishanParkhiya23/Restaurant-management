<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class PlaceOrderController extends Controller
{
    public function confirmOrder()
    {
        $food = get_cart();
        return view('client_side.confirm-order', compact('food'));
    }

    public function delivery()
    {
        $food = get_cart();
        $user = session()->get('loginData');
        return view('client_side.confirm-order.delivery', compact('food', 'user'));
    }
    public function takeaway()
    {
        $food = get_cart();
        $user = session()->get('loginData');
        return view('client_side.confirm-order.take-away', compact('food', 'user'));
    }
    public function ontableorder()
    {
        $food = get_cart();
        $user = session()->get('loginData');
        return view('client_side.confirm-order.ontableorder', compact('food', 'user'));
    }

    public function saveOrder(Request $request, $type)
    {
        $request->validate(
            [
                'fullname' => 'required',
                'email' => 'required|email',
                'contact' => 'required|min:10|max:10'
            ],
            [
                'fullname.required' => 'Fullname must be fillable',
                'email.required' => 'Email must be fillable',
                'email.email' => 'Email formet is incorrect',
                'contact.required' => 'Contact must be fillable',
                'contact.min' => 'Contact must have 10 digits',
                'contact.max' => 'Contact must be 6 digits'
            ]
        );

        if ($type == 1) {
            $request->validate(
                [
                    'address' => 'required',
                    'zipcode' => 'required|min:6|max:6'
                ],
                [
                    'address.required' => 'Address must be fillable',
                    'zipcode.required' => 'Zipcode must be fillable',
                    'zipcode.min'   => 'Zipcode must be 6 digits',
                    'zipcode.max' => 'Zipcode must be 6 digits'
                ]
            );
        }

        if ($type == 3) {
            $request->validate(
                ['table' => 'required'],
                ['table.required' => 'Table must be selected']
            );
        }

        $order = save_order();
        
        Order::where('orderId', $order)
            ->update([
                'name' => $request->fullname,
                'email' => $request->email,
                'contact' => $request->contact
            ]);


        if ($type == 1) {
            Order::where('orderId', $order)
                ->update([
                    'address' => $request->address,
                    'zipcode' => $request->zipcode,
                    'type' => '1'
                ]);
        } elseif ($type == 2) {
            Order::where('orderId', $order)
                ->update([
                    'type' => '2'
                ]);
        } else {
            Order::where('orderId', $order)
                ->update([
                    'table' => $request->table,
                    'type' => '3'
                ]);
        }

        // dd($order);
        return redirect(route('user.menu'))->with('success', 'Your order has been placed');
    }
}
