<?php

namespace App;

final class Kernel
{
    protected $middlewares = [
        
    ];

    protected $providers = [
        \App\Providers\AppServiceProvider::class
    ];

    public function register($app) 
    {
        if ($this->has($this->providers)) {
            foreach($this->providers as $provider) {
                $app->register($provider);
            }
        }
        if ($this->has($this->middlewares)) {
            foreach($this->middlewares as $middleware) {
                $app->middleware($middleware);
            }
        }
    }

    private function has(array $data)
    {
        if (count($data) > 0) return true;
        return false;
    }
}
