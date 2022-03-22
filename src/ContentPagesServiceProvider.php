<?php

namespace TwentySixB\LaravelContentPages;

use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class ContentPagesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package) : void
    {
        $package->name('laravel-content-pages')
            ->hasConfigFile()
            ->hasRoute('web');
    }
}
