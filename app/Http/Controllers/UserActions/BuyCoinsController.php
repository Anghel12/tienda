<?php

namespace App\Http\Controllers\UserActions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuyCoinsController extends Controller
{
   // Mostrar todas las transacciones (Read)
   public function index()
   {

       return view('user_actions.buy_coins.index');
   }


}
 