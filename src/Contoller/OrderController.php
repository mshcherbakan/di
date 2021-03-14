<?php


namespace App\Controller;


use App\Libs\CurrenciesExchanger\CurrenciesExchangerInterface;
use App\Service\OrderService;

class OrderController
{
    private OrderService $orderService;
    private CurrenciesExchangerInterface $exchanger;
    /**
     * OrderController constructor.
     * @param OrderService $orderService
     */
    public function __construct(OrderService $orderService, CurrenciesExchangerInterface $currenciesExchanger)
    {
        $this->orderService = $orderService;
        $this->exchanger = $currenciesExchanger;
    }

    public function create()
    {
        $this->orderService->create([]);
    }

    public function update()
    {
        $this->orderService->update([]);
    }
}