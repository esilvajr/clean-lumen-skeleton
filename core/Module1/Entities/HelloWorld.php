<?php

namespace Module1\Entities;

class HelloWorld implements \Module1\Gateways\HelloWorld
{
    public function sayHelloWorld(): string
    {
        return "Hello World! Version 1";
    }
}