<?php

namespace Core\Gateways\Adapters\ServiceManagers;

use Illuminate\Container\Container;
use Core\Gateways\ServiceManager;

class IlluminateAdapter implements ServiceManager
{
    private $container;

    public function __construct()
    {
        $this->container = app();
    }

    public function make(string $abstract, array $parameters = [])
    {
        if (empty($parameters)) {
            return $this->container->make($abstract);
        }
        return $this->container->makeWith($abstract, $parameters);
    }

    public function bind(array $abstract, \Closure $concrete = null, bool $shared = false): void
    {
        $this->container->bind($abstract, $concrete, $shared);
    }
}