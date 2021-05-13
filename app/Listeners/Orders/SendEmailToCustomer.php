<?php

namespace App\Listeners\Orders;

use App\Events\Orders\OrderCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailToCustomer
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(OrderCreated $orderCreated)
    {
        \Log::info('Send email to customer for order #' . $orderCreated->order->id);
    }
}
