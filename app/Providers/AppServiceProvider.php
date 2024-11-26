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
use App\Models\OrderCoin;
use App\Models\Wallet;
use Exception;
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
        /* mostar mfavoritos */
        view()->composer('*', function ($view) {
            if (auth()->check()) {
                $favoritesCount = Favorite::where('user_id', auth()->user()->id)->count();
                $view->with('favoritesCount', $favoritesCount);
            }
        });
/* mostar snombre de la moneda */
    
        view()->composer('*', function ($view) {
            $coin = Coin::find(1);
            $view->with(['coin' => $coin]);
        }); 
/* mostar coin-order count */
        view()->composer('*', function ($view) {
            $OrderCoin = OrderCoin::count();
            $view->with(['OrderCoin' => $OrderCoin]);
        }); 

    /* Notificaciones */
    view()->composer('*', function ($view) {
        $unreadNotificationsCount = 0;

        if (Auth::check()) {
            $user = Auth::user();

            // Verificar si el usuario es Admin
            if ($user->hasRole('Admin')) {
                // Contar solo las notificaciones tipo 'Admin'
                $unreadNotificationsCount = $user->unreadNotifications->where('data.type', 'Admin')->count();
            } else {
                // Para otros usuarios, contar solo sus notificaciones personales
                $unreadNotificationsCount = $user->unreadNotifications->where('data.type', 'User')->count();
            }
        }

        // Compartir el conteo con todas las vistas
        $view->with('unreadNotificationsCount', $unreadNotificationsCount);
    });




        /* mostar sus coins a los usuarios */
        View()->composer('*', function ($view) {
            // Verifica si el usuario está autenticado
            if (auth()->check()) {
                $user = auth()->user();
                $wallet = wallet::where('user_id', $user->id)->first();
                $balance = $wallet ? $wallet->balance : 0; // Si tiene wallet, mostrar coins, sino mostrar 0
            } else {
                $balance = 0; // Si no está autenticado, mostrar 0 coins
            }
            
            $view->with('userBalance', $balance);
        });
        /* certificado ssl https */
        if (env('FORCE_HTTPS') === 'true') {
            URL::forceScheme('https');
        }


    }
}
