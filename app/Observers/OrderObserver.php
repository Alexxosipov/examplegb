<?php

namespace App\Observers;

use App\Events\Orders\OrderCreated;
use App\Models\Order;

class OrderObserver
{
    public function created(Order $order)
    {
        OrderCreated::dispatch($order);
    }
}
