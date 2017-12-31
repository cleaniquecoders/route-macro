<?php

namespace CleaniqueCoders\RouteMacro\Tests;

use Illuminate\Support\Facades\Route;

/**
 *
 */
class MacroRouteTest extends TestCase
{
    /** @test */
    public function has_setting_route()
    {
        $this->assertTrue(Route::hasMacro('setting'));
    }

    /** @test */
    public function has_settings_route()
    {
        $this->assertTrue(Route::hasMacro('settings'));
    }

    /** @test */
    public function has_success_route()
    {
        $this->assertTrue(Route::hasMacro('success'));
    }

    /** @test */
    public function has_error_route()
    {
        $this->assertTrue(Route::hasMacro('error'));
    }

    /** @test */
    public function has_warning_route()
    {
        $this->assertTrue(Route::hasMacro('warning'));
    }

    /** @test */
    public function has_message_route()
    {
        $this->assertTrue(Route::hasMacro('message'));
    }
}
