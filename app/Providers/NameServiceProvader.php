<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\Getname;
use App\InterfaceServer\NameInterface;

class NameServiceProvader extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\InterfaceServer\NameInterface', 'App\Service\Getname');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
