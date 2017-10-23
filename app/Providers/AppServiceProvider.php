<?php

namespace App\Providers;

use Core\Gateways\HelloWorld;
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
            return (new \Core\Entities\HelloWorld())->sayHelloWorld();
        });
    }
}