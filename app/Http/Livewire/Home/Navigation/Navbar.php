<?php

namespace App\Http\Livewire\Home\Navigation;

use Livewire\Component;
use App\Models\Category;
use App\Models\Configuracion;
use App\Models\navbarConfig;

class Navbar extends Component
{
    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        return view('livewire.home.navigation.navbar');
    }
}
