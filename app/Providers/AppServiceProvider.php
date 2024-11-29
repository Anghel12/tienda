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
      view()->composer('*', function ($view) {
            $coin = Coin::find(1);
            $view->with(['coin' => $coin]);
        });  

      view()->composer('*', function ($view) {
            $OrderCoin = OrderCoin::count();
            $view->with(['OrderCoin' => $OrderCoin]);
        });  */

    /* QUITAR ESTO SI O SI PROBLEMAS DE RENDIMIENTO */
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




        /* mostar sus coins a los usuarios quitar y poner en el navbar*/
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
