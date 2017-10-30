<?php

$router->get('/', function() use ($router){
    return app()->version();
});

$router->group(['prefix' => 'v1/'], function() use ($router) {
    $router->get('/', function() use ($router){
        $gateway = new \Module1\Gateways\Gateway();
        return $gateway->getServiceManager()->make(\Module1\Gateways\HelloWorld::class);
    });
});

$router->group(['prefix' => 'v2/'], function() use ($router) {
    $router->get('/', function() use ($router){
        $gateway2 = new \Module2\Gateways\Gateway();
        return $gateway2->getServiceManager()->make(\Module2\Gateways\HelloWorld::class);
    });
});
