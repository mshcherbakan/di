<?php

use App\Service\OrderService;

require '../vendor/autoload.php';


$di = new \Core\DI('../config/dependencies.php');
/** @var OrderService $orderService */
$orderService = $di->get(OrderService::class);
var_dump($orderService);
echo '<br>';
echo '<br>';
echo '<br>';

$userRepository = $di->get(\App\Repository\User\UserInterfaceRepository::class);
var_dump($userRepository);