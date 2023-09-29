<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;

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
        Paginator::useBootstrap();

        View::composer('*', function($view)
        {
            $navLinks = [
                [
                    'link' => route('admin.dashboard'),
                    'name' => "Dashboard",
                    'icon' => 'bx-user',
                    'active' => (Route::currentRouteName() == 'admin.dashboard' ? true : false)
                ],
                [
                    'link' => route('admin.config'),
                    'name' => "Configurações",
                    'icon' => 'bx-user',
                    'active' => (Route::currentRouteName() == 'admin.config' ? true : false)
                ]
            ];

            // Used to send navbar links to view
            $view->with('navLinks', $navLinks);
        });
    }
}
