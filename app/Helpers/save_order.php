<?php

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;

function save_order()
{
    // create unique order id

    // do {
    //     $orderId = 'order' . rand(10000, 99999);
    //     $checkId = Order::where('orderId', $orderId)->first();
    // } while (isset($checkId));

    $orderData = Order::orderBy('id', 'desc')->first();
    if ($orderData) {
        $prefix  = 'order';
        $code_E = substr($orderData->orderId, strlen($prefix));
        $E_last_number = ($code_E / 1) * 1;
        $increment_last_number = $E_last_number + 1;
        $last_number_length = strlen($increment_last_number);
        $E_length = 6 - $last_number_length;
        $last_number = $increment_last_number;
        $emp = "";
        for ($i = 0; $i < $E_length; $i++) {
            $emp .= "0";
        }
        $orderId = $prefix . $emp . $last_number;
    } else {
        $orderId = 'order00001';
    }

    date_default_timezone_set("Asia/Calcutta");     // set time zone for get current indian time

    $total = get_cart_total();
    $cartFood = get_cart();


    foreach ($cartFood as $food) {
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
        'totalAmount' => $total,
        'user_id' => session()->get('Ulogin')
    ]);

    return $orderId;
}
