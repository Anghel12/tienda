<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\OrderCoin;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Transaction;
use App\Notifications\Admin\OrderCoinVoucher;
use App\Notifications\User\OrderCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class PaymentController extends Controller
{
    public function purchaseCoins(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'amount' => 'required|numeric|min:1',
            'coin_id' => 'required|exists:coins,id',
            'payment_method' => 'required',
        ]);

        $amount = $request->input('amount');
        $totalPrice = $amount * 100;
        $coin_id = $request->input('coin_id');
        $ipAddress = $request->ip();
        $paymentMethod = $request->input('payment_method');

        switch ($paymentMethod) {
            case 'stripe':
                return $this->processStripePayment($amount, $totalPrice, $request->input('email'), $request->input('name'), $coin_id, $ipAddress);

            case 'paypal':
                return redirect()->route('payment_methods.paypal', [
                    'amount' => $amount,
                    'user' => Auth::user()
                ]);

            case 'voucher':
                // Redirigir a la vista de comprobante para completar el pago
                return redirect()->route('payment_methods.voucher', [
                    'amount' => $amount,
                    'email' => $request->input('email'),
                    'name' => $request->input('name'),
                    'coin_id' => $coin_id,
                    'ip_address' => $ipAddress
                ]);

            default:
                return back()->with('error', 'Método de pago no válido.');
        }
    }

    private function processStripePayment($amount, $totalPrice, $email, $name, $coin_id, $ipAddress)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $paymentIntent = PaymentIntent::create([
                'amount' => $totalPrice,
                'currency' => 'usd',
                'payment_method_types' => ['card'],
                'description' => "Compra de $amount monedas por el usuario $name",
                'receipt_email' => $email,
            ]);

            return redirect()->route('payment_methods.stripe', [
                'clientSecret' => $paymentIntent->client_secret,
                'amount' => $amount,
                'coin_id' => $coin_id,
                'user_email' => $email,
                'ip_address' => $ipAddress,
            ]);

        } catch (\Exception $e) {
            return back()->with('error', 'Error al procesar el pago con Stripe: ' . $e->getMessage());
        }
    }

    // Completar el pago del comprobante (voucher)
    public function completeVoucherPayment(Request $request)
    {
        $user = User::where('email', $request->input('email'))->first();
        if (!$user) {
            return back()->with('error', 'Usuario no encontrado.');
        }

    /*     $wallet = Wallet::firstOrCreate(
            ['user_id' => $user->id],
            ['name' => 'Wallet for ' . $user->name, 'currency' => 'USD', 'balance' => 0]
        );

        $wallet->balance += $request->input('amount');
        $wallet->save(); */

        $transaction = Transaction::create([
            'user_id' => $user->id,
            'amount' => $request->input('amount'),
            'coin_id' => $request->input('coin_id'),
            'type' => 'El vaucher se envio exitosamente',
            'status' => 'pending',
            'price' => $request->input('amount'),
            'ip_address' => $request->input('ip_address'),
        ]); 

        $order = OrderCoin::create([
            'user_id' => $user->id,
            'transaction_id' => $transaction->id,
            'name' => $user->name,
            'email' => $request->input('email'),
            'amount' => $request->input('amount'),
            'payment_method' => 'voucher',
            'status' => 'pending',
        ]);


        // Manejar la subida de imágenes del voucher
        if ($request->hasFile('voucher_images')) {
            foreach ($request->file('voucher_images') as $file) {
                $url = Storage::put('public/OrderVoucher', $file);

                $image = new Image([
                    'url' => $url,
                    'imageable_id' => $transaction->id,
                    'imageable_type' => Transaction::class,
                    'created_by' => $user->id,
                ]);

                $order->images()->save($image);
            }
        }
        // Notificar al administrador
        // Encuentra al usuario con rol de Admin
        $admin = User::role('Admin')->first(); // Cambia 'Admin' por el nombre exacto de tu rol


        if ($admin) {
            $admin->notify(new OrderCoinVoucher($order));
            
        }
        // Notificar al usuario que realizó la orden
        $user = $order->user;
        $user->notify(new OrderCreated($order));
  
    // Redirigir a la vista del historial de transacciones, pasando el ID
    return redirect()->route('user_actions.order_vouchers.show', $order->id)
      ->with('success', 'Se a enviado el Voucher exitosamente al administrador'); 
    }

    public function showVoucherPage(Request $request)
    {
        // Pasar los datos necesarios a la vista
        return view('payment_methods.voucher.index', [
            'amount' => $request->input('amount'),
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'coin_id' => $request->input('coin_id'),
            'ip_address' => $request->input('ip_address'),
        ]);
    }

    
    public function showStripePage(Request $request)
    {
        // Pasar los datos necesarios a la vista
        return view('payment_methods.stripe.index', [
            'amount' => $request->input('amount'),
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'coin_id' => $request->input('coin_id'),
            'ip_address' => $request->input('ip_address'),
        ]);
    }

    public function showPaypalPage(Request $request)
    {
        // Pasar los datos necesarios a la vista
        return view('payment_methods.paypal.index', [
            'amount' => $request->input('amount'),
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'coin_id' => $request->input('coin_id'),
            'ip_address' => $request->input('ip_address'),
        ]);
    }

    public function showVisaPage(Request $request)
    {
        // Pasar los datos necesarios a la vista
        return view('payment_methods.visa.index', [
            'amount' => $request->input('amount'),
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'coin_id' => $request->input('coin_id'),
            'ip_address' => $request->input('ip_address'),
        ]);
    }








}
