<?php

namespace CleaniqueCoders\RouteMacro\Macros\Routing;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route as DefaultRoute;

class Route
{
    public static function registerMacros()
    {
        Collection::make(glob(__DIR__ . '/macros/*.php'))
            ->mapWithKeys(function ($path) {
                return [$path => pathinfo($path, PATHINFO_FILENAME)];
            })
            ->reject(function ($macro) {
                return DefaultRoute::hasMacro($macro);
            })
            ->each(function ($macro, $path) {
                require_once $path;
            });

    }
}
