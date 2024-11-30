<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest\MercadoPagoRequest;
use App\Http\Requests\PaymentRequest\PayPalRequest;
use App\Http\Requests\PaymentRequest\StripeRequest;
use App\Interfaces\PaymentGateway;
use App\Models\Admin\FuntWallet\PackageCoin;
use App\Models\Coin;
use App\Models\PaymentMethod;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MercadoPago\SDK;
use MercadoPago\Payment;
use MercadoPago\Preference;
use MercadoPago\Item;
use MercadoPago\Payer;
use Illuminate\Support\Facades\Redirect;




class CoinController extends Controller
{

    protected $paymentGateway;

public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;

        $this->middleware('can:admin.roles.index')->only('index');
        $this->middleware('can:admin.roles.create')->only('create', 'store');
        $this->middleware('can:admin.roles.edit')->only('edit', 'update');
        $this->middleware('can:admin.roles.destroy')->only('destroy'); 
    } 

    // Mostrar formulario de compra de monedas virtuales
    public function showBuyCoinsForm()
    {
        $packageCoins = PackageCoin::all();
        $paymentMethods = PaymentMethod::where('enabled', true)->get();

        return view('admin.buyCoins.index', compact('paymentMethods', 'packageCoins'));
    }


     // Procesar pago
     public function confirmarPackage(Request $request)
     {
        return view('admin.buyCoins.confirmar_package');
    }  

    public function ok(Request $request)
    {
       // Configurar el SDK de MercadoPago con el ID y la clave secreta de la aplicación
    // SDK de Mercado Pago
   // SDK de Mercado Pago
   require base_path('vendor/autoload.php');
   // Agrega credenciales
   SDK::setAccessToken(config('services.mercadopago.app_secret'));
   
   // Crea un objeto de preferencia
   $preference = new Preference();

   // Crea un ítem en la preferencia
   $item = new Item();
   $item->title = 'Mi producto';
   $item->quantity = 1;
   $item->unit_price = 75.56;
   $preference->items = array($item);
   $preference->save();

   }

    public function paymentNotification(Request $request)
{
    // Obtener los datos de la notificación
    $paymentId = $request->input('id');
    $paymentStatus = $request->input('status');

    // Buscar la transacción correspondiente en la base de datos
    $transaction = Transaction::where('payment_id', $paymentId)->first();

    // Actualizar el estado de la transacción según el estado del pago en MercadoPago
    if ($transaction) {
        $transaction->status = $paymentStatus;
        $transaction->save();
    }

    // Responder a la notificación con un mensaje de éxito
    return response('OK', 200);
}


public function cancelPayment(Request $request)
{
    $paymentId = $request->input('payment_id');
    $this->paymentGateway->cancelPayment($paymentId);
    // ...
}

public function getPaymentDetails(Request $request)
{
    $paymentId = $request->input('payment_id');
    $details = $this->paymentGateway->getPaymentDetails($paymentId);
    // ...
}
    

/* mostrar historial de transacciones */

public function showTransactions()
{
    $user = auth()->user();
    $transactions = Transaction::where('user_id', $user->id)->orderBy('created_at', 'desc')->paginate(10);

    return view('admin.transactions.index', ['transactions' => $transactions]);
}



}
