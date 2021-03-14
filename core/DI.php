<?php

namespace Core;

use ReflectionClass;

class DI
{
    private array $dependencies = [];

    public function __construct(string $fileName)
    {
        $this->dependencies = require $fileName;
    }


    /**
     * @param string $service
     * @throws \ReflectionException
     */
    public function get(string $service) {
        // App\Service\OrderService
        // App\Repository\Order\OrderRepositoryInterface
        if (!array_key_exists($service, $this->dependencies['bindings'])) {
            $reflection = new ReflectionClass($service);
            $constructor = $reflection->getConstructor();
            if ($constructor == null) {
                return new $service;
            }

            $parameters = $constructor->getParameters();
            if (!$parameters) {
                return new $service;
            }

            $newParameters = [];
            foreach ($parameters as $parameter) {
                $newParameters[$parameter->getName()] = $this->get($parameter->getClass()->getName());
            }
            return $reflection->newInstanceArgs($newParameters);
        }
        return new $this->dependencies['bindings'][$service];
    }
}