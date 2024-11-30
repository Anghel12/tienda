<?php

namespace App\Http\Livewire;

use App\Models\Wallet;
use Livewire\Component;

class IconProfile extends Component
{
    public function render()
    {

        $balance = 0; // Valor predeterminado

        if (auth()->check()) {
            $balance = auth()->user()->wallet->balance ?? 0;
        }
        return view('livewire.icon-profile', compact('balance'));
    }
}
