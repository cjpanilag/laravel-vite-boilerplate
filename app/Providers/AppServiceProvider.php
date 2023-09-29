<?php

namespace App\Providers;

use Dedoc\Scramble\Scramble;
use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /**
         * Scramble dedoc wrapper.
         *
         * reference: https://scramble.dedoc.co/usage/getting-started
         */
        Scramble::routes(function (Route $route) {
            return Str::startsWith($route->uri, 'api/');
        });
    }
}
