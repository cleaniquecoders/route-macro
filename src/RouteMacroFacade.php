<?php

namespace CleaniqueCoders\RouteMacro;

/**
 * This file is part of route-macro
 *
 * @license MIT
 * @package route-macro
 */

use Illuminate\Support\Facades\Facade;

class RouteMacroFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'RouteMacro';
    }
}
