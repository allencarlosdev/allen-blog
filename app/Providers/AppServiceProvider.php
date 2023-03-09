<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\UrlGenerator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    //HTTPS for Render
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    // public function boot()
    // {
    //     if($this->app->environment('production')) {
    //         \URL::forceScheme('https');
    //     }
    // }

    public function boot(UrlGenerator $url)
    {
        if (env('APP_ENV') == 'production') {
            $url->forceScheme('https');
        }
    }
}
