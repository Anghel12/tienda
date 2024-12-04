<?php

namespace App\Http\Controllers\UserActions;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TransferCoinController extends Controller
{

    // Mostrar el formulario de transferencia
    public function index()
    {

        return view('user_actions.transfer_coins.index');
    }
    public function show(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'amount' => 'required|numeric|min:1',
        ]);

        // Obtener los datos del destinatario
        $recipient = User::where('email', $request->email)->first();

        return view('user_actions.transfer_coins.show', [
            'recipient' => $recipient,
            'amount' => $request->amount,
        ]);
    }

    public function completeTransfer(Request $request)
{
    // Validar los datos de entrada
    $request->validate([
        'recipient_id' => 'required|exists:users,id',
        'amount' => 'required|numeric|min:1',
        'description' => 'nullable|string|max:255',
    ]);

    $sender = auth()->user();
    $recipient = User::find($request->recipient_id);
    $amount = $request->amount;

    // Verificar si el destinatario es el mismo que el remitente
    if ($sender->id == $recipient->id) {
        return redirect()->route('user_actions.transfer_coins.index')->with('error', 'No puedes Enviarte a ti mismo dinero');
    }

    // Obtener la wallet activa del remitente o crear una si no existe
    $senderWallet = $sender->wallet()->where('is_active', true)->first();
    if (!$senderWallet) {
        $senderWallet = $sender->wallet()->create([
            'name' => 'Wallet de ' . $sender->name,
            'currency' => 'USD',
            'balance' => 0,
            'is_active' => true,
            'type' => 'personal',
        ]);
    }

    // Obtener la wallet activa del destinatario o crear una si no existe
    $recipientWallet = $recipient->wallet()->where('is_active', true)->first();
    if (!$recipientWallet) {
        $recipientWallet = $recipient->wallet()->create([
            'name' => 'Wallet de ' . $recipient->name,
            'currency' => 'USD',
            'balance' => 0,
            'is_active' => true,
            'type' => 'personal',
        ]);
    }

    // Verificar si el remitente tiene suficiente balance
    if ($senderWallet->balance < $amount) {
        return back()->with('error', 'Saldo insuficiente.');
    }

    DB::beginTransaction();

    try {
        // Restar monedas del remitente
        $senderWallet->balance -= $amount;
        $senderWallet->save();

        // Sumar monedas al destinatario
        $recipientWallet->balance += $amount;
        $recipientWallet->save();

        // Registrar la transacción
        Transaction::create([
            'user_id' => $sender->id,
            'coin_id' => 1,
            'amount' => $amount,
            'type' => 'transfer',
            'status' => 'completed',
            'price' => 0,
            'description' => $request->description, // Guardamos la descripción
            'ip_address' => $request->ip(),
        ]);

        // Notificar al destinatario
        //$recipient->notify(new CoinTransferredNotification($sender, $amount));

        DB::commit();

        return redirect()->route('user_actions.transfer_coins.index')->with('success', 'Monedas transferidas con éxito.');
    } catch (\Exception $e) {
        DB::rollBack();
        return back()->with('error', 'Ocurrió un error al transferir las monedas.');
    }
}

    

}
