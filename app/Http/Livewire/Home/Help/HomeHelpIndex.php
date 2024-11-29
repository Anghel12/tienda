<?php

namespace App\Http\Livewire\Home\Help;

use App\Models\HomeHelp;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class HomeHelpIndex extends Component
{
    public function render() 
    {

          //borrar cache en el crud falta
      
          $HomeHelps = Cache::remember('home_helps', now()->addMonths(6), function () {
            return HomeHelp::all();
        });
        
        return view('livewire.home.help.home-help-index', compact('HomeHelps'));
        
    }
}
 