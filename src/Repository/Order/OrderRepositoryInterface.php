<?php

namespace App\Repository\Order;

use App\Model\Order;

interface OrderRepositoryInterface
{
    public function save(Order $order): void;
}