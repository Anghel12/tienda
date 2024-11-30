<?php

namespace App\Http\Livewire\Home\Navigation;

use Livewire\Component;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use Stripe\Balance;

class Navbar extends Component
{
    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        return view('livewire.home.navigation.navbar');
    }
}
