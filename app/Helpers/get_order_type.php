<?php

use App\Models\Order;
use App\Models\OrderItem;

function get_order_type($orderId)
{
    $order = Order::whereOrderid($orderId)->first();
    return $order['type'];
}
