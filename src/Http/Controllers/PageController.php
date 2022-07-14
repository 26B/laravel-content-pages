<?php

namespace TwentySixB\LaravelContentPages\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller;

class PageController extends Controller
{
    /**
     * Renders blade template if they exist.
     *
     * @param  Request $request
     * @return void
     */
    public function show(Request $request)
    {
        $name      = Str::replace('/', '.', $request->path());
        $view_name = config('content-pages.content_path', 'pages') . '.' . $name;

        if (view()->exists($view_name)) {
            return view($view_name);
        };

        abort(404);
    }
}
