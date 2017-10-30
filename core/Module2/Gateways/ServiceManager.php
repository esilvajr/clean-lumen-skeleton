<?php

namespace Module2\Gateways;

interface ServiceManager
{
    public function make(string $abstract, array $parameters = []);
    public function bind(array $abstract, \Closure $concrete = null, bool $shared = false) : void;
}