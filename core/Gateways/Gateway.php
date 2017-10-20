<?php

namespace Core\Gateways;

final class Gateway
{
    protected $adapters = [
        'service_manager' => [
            'illuminate' => \Core\Gateways\Adapters\ServiceManagers\IlluminateAdapter::class
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
