<?php

namespace Module2\Entities;

class HelloWorld implements \Core\Gateways\HelloWorld
{
    public function sayHelloWorld(): string
    {
        return "Hello World!";
    }
}
