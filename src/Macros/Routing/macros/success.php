<?php
use Illuminate\Support\Facades\Route;

Route::macro('success', function ($route = null, $message = null) {
    $message = !is_null($message) ? trans($message) : trans('labels.success');
    if (is_null($route)) {
        return redirect()->back()->with(trans('labels.__s'), $message);
    }
    return redirect()->route($route)->with(trans('labels.__s'), $message);
});
