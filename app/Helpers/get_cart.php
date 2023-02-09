<?php

use App\Models\Cart;

function get_cart()
{
    $userId = session()->get('Ulogin');
    $cartItem = Cart::where('user_id', $userId)
        ->where('confirmed', 0)
        ->where('is_set', 1)
        ->get();

    return $cartItem;
}
