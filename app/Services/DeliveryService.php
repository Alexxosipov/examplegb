<?php


namespace App\Services;


use App\Models\Order;

class DeliveryService
{
    public function __construct(OrderService $orderService)
    {
    }

    public function initiateDelivery(Order $order)
    {
        // ...
    }
}
