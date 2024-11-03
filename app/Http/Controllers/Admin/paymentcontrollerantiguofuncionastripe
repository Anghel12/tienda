<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Payment;
use App\Models\Transaction;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function purchaseCoins(Request $request)
    {
        // Validar datos del formulario
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'amount' => 'required|numeric|min:1', // Monto de monedas a comprar
            'coin_id' => 'required|exists:coins,id', // Validar que el coin_id exista
        ]);

        $amount = $request->input('amount'); // Cantidad de monedas
        $totalPrice = $amount * 100; // Precio en centavos (1 coin = $1)
        $coin_id = $request->input('coin_id'); // Obtener el coin_id del formulario
        $ipAddress = $request->ip(); // Capturar la IP del usuario

        // Configurar Stripe
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            // Crear el cargo en Stripe
            $charge = \Stripe\Charge::create([
                'amount' => $totalPrice, // En centavos
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => "Compra de $amount monedas por el usuario " . $request->input('name'),
                'receipt_email' => $request->input('email'),
            ]);

            // Obtener o crear la wallet del usuario
            $user = User::where('email', $request->input('email'))->first();
            if (!$user) {
                return back()->with('error', 'Usuario no encontrado.');
            }

            $wallet = Wallet::where('user_id', $user->id)->first();
            if (!$wallet) {
                // Crear una nueva wallet si no existe
                $wallet = new Wallet();
                $wallet->user_id = $user->id;
                $wallet->name = 'Wallet for ' . $user->name; // Puedes personalizar el nombre según lo necesites
                $wallet->currency = 'USD'; // La moneda que estás utilizando
                $wallet->balance = 0; // Valor inicial del balance
                $wallet->save();
            }

            // Actualizar el balance de la wallet
            $wallet->balance += $amount;
            $wallet->save();

            // Registrar la transacción
            Transaction::create([
                'user_id' => $user->id,
                'amount' => $amount,
                'coin_id' => $coin_id,
                'type' => 'purchase',
                'price' => $amount,
                'ip_address' => $ipAddress, // Incluir la dirección IP
            ]);

            return redirect()->back()->with('success', 'Compra realizada con éxito.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error al procesar el pago: ' . $e->getMessage());
        }
    }
}
