<?php

use Illuminate\Support\Facades\Route;

Route::macro('setting', function ($module) {

    $url = 'settings/' . str_replace('.', '', Str::singular($module));

    $name = 'settings.' . Str::singular($module);

    $controller = 'Settings\\' . Str::studly(str_replace('.', ' ', $module)) . 'SettingsController';

    Route::group([
        'middleware' => ['auth'],
    ], function () use ($url, $name, $controller) {
        Route::get($url . '/show', $controller . '@show')->name($name . '.show');
        Route::get($url . '/edit', $controller . '@edit')->name($name . '.edit');
        Route::put($url . '', $controller . '@update')->name($name . '.update');
        Route::delete($url, $controller . '@destroy')->name($name . '.destroy');
    });
});
