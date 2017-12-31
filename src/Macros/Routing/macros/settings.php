<?php

use Illuminate\Support\Facades\Route;

Route::macro('settings', function ($modules) {
    if (!is_array($modules)) {
        $modules = [$modules];
    }
    if (Route::hasMacro('setting')) {
        foreach ($modules as $module) {
            Route::setting($module);
        }
    }
});
