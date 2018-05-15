<?php

namespace Tang;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Tang\FooBar;

class FooServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupRoutes($this->app->router);
        // this for config
        $this->publishes([
            __DIR__.'../config/test.php' => config_path('test.php'),
        ]);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('foo',function(){
            return new FooBar;
        });
        config([
            'config/test.php',
        ]);

    }

    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'Tang'], function($router)
        {
            require __DIR__.'/routes.php';
        });
    }
}