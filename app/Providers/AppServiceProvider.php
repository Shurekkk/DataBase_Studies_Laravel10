<?php

namespace App\Providers;

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
        //
        
        //Curso something ai:
                // DB::listen(function ($query) {
        //     var_dump($query->sql);
        //     var_dump($query->binding ?? 'no binding');
        //     var_dump($query->time);
        // });
    }
}
