<?php

namespace App\Http\Controllers\UserActions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoryUserController extends Controller
{
    
    public function index()
    {
        return view('user_actions.histories.index');
  
    }
}
