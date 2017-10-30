<?php

namespace App\Providers;

use Module1\Gateways\HelloWorld as HWV1;
use Module2\Gateways\HelloWorld as HWV2;
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
        $this->app->bind(HWV1::class, function(){
            return (new \Module1\Entities\HelloWorld())->sayHelloWorld();
        });
        
        $this->app->bind(HWV2::class, function(){
            return (new \Module2\Entities\HelloWorld())->sayHelloWorld();
        });
    }
}