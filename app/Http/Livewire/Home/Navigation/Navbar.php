<?php

namespace App\Http\Livewire\Home\Navigation;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class Navbar extends Component
{
    public $Admin = false;

    public function mount()
    {
        $user = Auth::user();

        if ($user) {
            // Guardar el rol en caché para evitar múltiples consultas
            $this->Admin = Cache::remember("user_role_{$user->id}", now()->addMonths(6), function () use ($user) {
                return $user->hasRole('Admin');
            });
        }
    }

    public function render()
    {
        return view('livewire.home.navigation.navbar', [
            'Admin' => $this->Admin,
        ]);
    }
}


