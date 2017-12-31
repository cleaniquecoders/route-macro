<?php

namespace CleaniqueCoders\RouteMacro\Tests;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            \CleaniqueCoders\RouteMacro\RouteMacroServiceProvider::class,
        ];
    }
}
