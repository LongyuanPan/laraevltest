<?php

namespace Pan\laraveltest;

use Illuminate\Support\ServiceProvider;

class TestProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/avatar.php' => config_path('avatar.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('test', function ($app) {
            return new Test($app['config']);
        });
    }
}
