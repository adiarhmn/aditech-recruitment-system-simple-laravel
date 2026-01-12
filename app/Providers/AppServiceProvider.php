<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
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
        // Custom components
        Blade::anonymousComponentPath(base_path('resources/views/features/public/components'), 'public');
        Blade::anonymousComponentPath(base_path('resources/views/features/auth/components'), 'auth');
        Blade::anonymousComponentPath(base_path('resources/views/features'), 'feature');

        // Custom namespaces
        View::addNamespace('public', base_path('resources/views/features/public'));
        View::addNamespace('auth', base_path('resources/views/features/auth'));
        View::addNamespace('features', base_path('resources/views/features'));
    }
}
