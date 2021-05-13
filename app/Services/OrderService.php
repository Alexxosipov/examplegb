<?php


namespace App\Services;


use App\Exceptions\Orders\CreatingOrderIsNotAvailableNowException;
use App\Models\Order;

class OrderService
{
    public function create(string $name)
    {
        \Log::info('Calling create method in the service');

        if (!config('orders.able_to_create')) {
            throw new CreatingOrderIsNotAvailableNowException();
        }

        $order = Order::create(compact('name'));

        return $order;
    }
}
