<?php

namespace Module2\Entities;

class HelloWorld implements \Module2\Gateways\HelloWorld
{
    public function sayHelloWorld(): string
    {
        return "Hello World! Version 2";
    }
}
