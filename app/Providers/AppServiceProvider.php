<?php

namespace App\Providers;

use App\Interfaces\PaymentGateway;
use App\Interfaces\PaymentGateway\BcpGateway;
use App\Interfaces\PaymentGateway\MercadoPagoGateway;
use App\Interfaces\PaymentGateway\PayPalGateway;
use App\Interfaces\PaymentGateway\StripeGateway;
use Illuminate\Support\ServiceProvider;
use App\Models\Coin;
use App\Models\Favorite;
use Exception;



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

        if ($this->app->environment('local')) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }

    }
    

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            if (auth()->check()) {
                $favoritesCount = Favorite::where('user_id', auth()->user()->id)->count();
                $view->with('favoritesCount', $favoritesCount);
            }
        });

    
        view()->composer('*', function ($view) {
            $coin = Coin::find(1);
            $view->with(['coin' => $coin]);
        }); 

    }
}
