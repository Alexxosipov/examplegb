<?php

namespace App\Http\Controllers;

use App\Exceptions\Orders\CreatingOrderIsNotAvailableNowException;
use App\Http\Requests\StoreOrderRequest;
use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private OrderService $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function store(StoreOrderRequest $request)
    {
        \Log::info('Calling store method in the controller');
        try {
            $this->orderService->create($request->get('name'));
        } catch (CreatingOrderIsNotAvailableNowException $e) {
            return redirect()->back()->with('warning', 'Can now create an order right now ;(!');
        }

        return redirect()->back()->with('success', 'Success!');
    }
}
