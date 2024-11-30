<?php

namespace App\Http\Livewire\Admin\Navigation;

use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NavBar extends Component
{
    public function render()
    {
        return view('livewire.admin.navigation.nav-bar');
    }
}
