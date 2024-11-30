<?php

namespace App\Providers;

use App\Interfaces\PaymentGateway;
use App\Interfaces\PaymentGateway\MercadoPagoGateway;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PaymentGateway::class, function ($app) {
            /* return new StripeGateway(); */
                return new MercadoPagoGateway();  
        });

    }
    

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        /* No hacer esto mala practicas */
       /*  view()->composer('*', function ($view) {
            if (auth()->check()) {
                $favoritesCount = Favorite::where('user_id', auth()->user()->id)->count();
                $view->with('favoritesCount', $favoritesCount);
            }
        });
        */
       
        /* certificado ssl https */
        if (env('FORCE_HTTPS') === 'true') {
            URL::forceScheme('https');
        }


    }
}
