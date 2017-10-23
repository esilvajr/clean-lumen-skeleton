<?php

$router->get('/', function() use ($router){
    return app()->version();
});

$router->group(['prefix' => 'v1/'], function() use ($router) {
    $router->get('/', function() use ($router){
        $gateway = new \Core\Gateways\Gateway();
        return $gateway->getServiceManager()->make(\Core\Gateways\HelloWorld::class);
    });
});

