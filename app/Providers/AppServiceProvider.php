<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Dedoc\Scramble\Scramble;
use Illuminate\Routing\Route;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Scramble::configure()
         ->routes(function (Route $route) {
        return Str::startsWith($route->uri, 'api/');
        });

        Gate::define('viewApiDocs', function () {
        return true;
        });

        // Gate untuk fitur Export Product
        Gate::define('export-product', function (User $user) {
            return $user->role === 'admin';
        });

        Gate::define('manage-category', function (User $user) {
        return $user->role === 'admin'; 
    });
    }
}