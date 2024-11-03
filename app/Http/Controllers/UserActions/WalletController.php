<?php

namespace App\Http\Controllers\UserActions;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function index()
    {
          // Obtener el usuario logueado
          $user = Auth::user();

          // Obtener la wallet del usuario logueado
          $user_wallet = Wallet::where('user_id', $user->id)->first();
  
          // Pasar la wallet a la vista
          return view('user_actions.wallets.index', ['wallet' => $user_wallet]);

    }
 
}
