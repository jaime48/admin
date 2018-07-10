<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Schedule\SendPaymentNotice;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SendPaymentNotice::class, function(){
            return new SendPaymentNotice();
        });
    }
}
