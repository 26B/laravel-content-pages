# Laravel Content Pages

Have a configurable controller to navigate pages of content.

- Supports multi levels.
- Configurable folder for blade templates.
- Optional catch-all route so you don't need to configure specific routes.

## Getting started

Require the package

```
composer require 26b/laravel-content-pages
```

That's it, now, under the `/resources/views/` create a folder called `content` (can be changed on the configuration) and place your blade templates there. 

Once you have created a template, for example `somepage.blade.php`, you can point your browser to `yourproject.test/somepage` and you'll see your content.

## Custom configuration

Publish the configuration file should you need to customise it.

```
php artisan vendor:publish --tag=content-pages-config
```

If for example you dont want to use the catch-all route, you can disable it on the config `content-pages.php`

```
fallback_route => false,
```

Then on your web routes you can add something like this.

```
Route::get('/pages/{any}', [PageController::class, 'show']);
```
