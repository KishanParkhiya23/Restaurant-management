<?php

function get_cart_total()
{
    $cartItem = get_cart();
    $total = 0;
    foreach ($cartItem as $item) {
        $total += $item->foods->prize * $item->quantity;
    }
    return $total;
}
