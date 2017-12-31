<?php

namespace CleaniqueCoders\RouteMacro;

use Illuminate\Support\ServiceProvider;

class RouteMacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        \CleaniqueCoders\RouteMacro\Macros\Routing\Route::registerMacros();
    }
}
