<?php

namespace App\Http\Controllers\UserActions;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HistoryTransaccionController extends Controller
{
       // Mostrar todas las transacciones (Read)
   public function index()
   {
      // Obtener todas las transacciones del usuario autenticado
      $UserTransaccion = Transaction::where('user_id', auth()->id())->get();
      return view('user_actions.history_transaccions.index', compact('UserTransaccion'));
   }

   public function show($id)
   {
       $transaccion = Transaction::with('coin')->findOrFail($id); // Carga la relación coin
       return view('user_actions.history_transaccions.show', compact('transaccion'));
   }
   

}
