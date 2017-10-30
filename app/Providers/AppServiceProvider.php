<?php

namespace App\Providers;

use Module1\Gateways\HelloWorld;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(HelloWorld::class, function(){
            return (new \Module1\Entities\HelloWorld())->sayHelloWorld();
        });
    }
}