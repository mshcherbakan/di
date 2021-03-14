<?php

namespace App\Service;

use App\Model\Order;
use App\Repository\Order\OrderRepositoryInterface;
use App\Repository\User\UserInterfaceRepository;

class OrderService
{
    private OrderRepositoryInterface $orderRepository;
    private UserInterfaceRepository $userRepository;

    public function __construct(
        OrderRepositoryInterface $orderRepository,
        UserInterfaceRepository $userRepository
    )
    {
        $this->orderRepository = $orderRepository;
        $this->userRepository = $userRepository;
    }

    public function create(array $data)
    {
        // business cases

        $order = new Order();
        $this->orderRepository->save($order);
    }
}