<?php

use TwentySixB\LaravelContentPages\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Example Route
// Route::get('/pages/*', fn() => view('pages.about'));

if (config('content-pages.fallback_route', true) === true) {
    Route::fallback([PageController::class, 'show']);
}
