<?php

namespace Core\Entities;

class HelloWorld implements \Core\Gateways\HelloWorld
{
    public function sayHelloWorld(): string
    {
        return "Hello World!";
    }

}