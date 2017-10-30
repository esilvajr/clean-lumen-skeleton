<?php

namespace ServiceManager;

final class ServiceLocator
{
    protected $adapters = [
        'service_manager' => [
            'illuminate' => \ServiceManager\Adapters\IlluminateAdapter::class
        ]
    ];

    public function getServiceManager()
    {
        if ($adapter = $this->adapters['service_manager'][getenv('GATEWAY_SERVICE_MANAGER')]) {
            return new $adapter;
        }
        throw new AdapterNotFoundException();
    }
}
