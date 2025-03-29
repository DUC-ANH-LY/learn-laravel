<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        //

        Blade::component('partials.modal', 'modal');
        view()->share('test', 'tesst');
        // Using class based composers...
        View::composer('profile', ProfileComposer::class);

        // Using closure based composers...
        View::composer('welcome', function (View $view) {
            // ...
        });

        View::composer('dashboard', function (View $view) {
            // ...
        });
        \DB::listen(function ($query) {
            \Log::info(
                $query->sql,
                [
                    'bindings' => $query->bindings,
                    'time' => $query->time
                ]
            );
        });
    }
}
