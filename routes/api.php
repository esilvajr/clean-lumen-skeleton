<?php

$router->get('/', function() use ($router){
    return app()->version();
});

$router->group(['prefix' => 'v1/'], function() use ($router) {
    $router->get('/', function() use ($router){
        $sm = new ServiceManager\ServiceLocator();
        return $sm->getServiceManager()->make(\Module1\Gateways\HelloWorld::class);
    });
});

$router->group(['prefix' => 'v2/'], function() use ($router) {
    $router->get('/', function() use ($router){
        $sm = new ServiceManager\ServiceLocator();
        return $sm->getServiceManager()->make(\Module2\Gateways\HelloWorld::class);
    });
});
