<?php

use App\Repository\Order\MysqlOrderRepository;
use App\Repository\Order\OrderRepositoryInterface;
use App\Repository\User\MysqlUserRepository;
use App\Repository\User\UserInterfaceRepository;

return [
    'bindings' => [
        OrderRepositoryInterface::class => MysqlOrderRepository::class,
        UserInterfaceRepository::class => MysqlUserRepository::class
    ],
    'singleton' => [

    ]
];
