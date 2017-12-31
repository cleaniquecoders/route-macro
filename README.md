## About Your Package

Tell people about your package

## Installation

1. In order to install PackageName in your Laravel project, just run the *composer require* command from your terminal:

```
composer require cleanique-coders/route-macro
```

2. Then in your `config/app.php` add the following to the providers array:

```php
CleaniqueCoders\RouteMacro\RouteMacroServiceProvider::class,
```

3. In the same `config/app.php` add the following to the aliases array:

```php
'RouteMacro' => CleaniqueCoders\RouteMacro\RouteMacroFacade::class,
```

## Usage 

Create the controller:

```
php artisan make:controller Settings/ApplicationSettingController -r
```

> Please make sure to use `Settings` namespace and `SettingController` suffix and with option `-r` supply.

In your web route:

```php
Route::setting('application');
Route::setting('hr.payroll');
Route::setting('hr.claim');
```





## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).