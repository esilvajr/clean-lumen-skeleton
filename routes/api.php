<?php

$router->group(['prefix' => 'v1/'], function() use ($router) {

    $router->get('/', function() use ($router){
        
        $gateway = new \Core\Gateways\Gateway();
        dd($gateway->getServiceManager()->make("GatewayHelloWorld"));

    });

});

