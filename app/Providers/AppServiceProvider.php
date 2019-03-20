<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Cashier\Cashier;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (config('saas.payment_gateway', '') == 'stripe') {
            $this->app->register('App\Providers\StripeServiceProvider');
        } else {
            $this->app->register('App\Providers\BraintreeServiceProvider');
        }

        $currency = config('saas.currency', 'usd');
        $currencySymbol = config('saas.currency_symbol', '$');

        Cashier::useCurrency($currency, $currencySymbol);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
