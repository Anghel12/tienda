<?php

namespace App\Http\Livewire\Home\About;

use App\Models\AboutUsHome;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class HomeAboutUsIndex extends Component
{
    public function render()
    {

          //borrar cache en el crud falta
        $aboutUsHomes = Cache::remember('aboutUsHomes', now()->addMonths(6), function () {
            return AboutUsHome::first();
        });

        return view('livewire.home.about.home-about-us-index', compact('aboutUsHomes'));
    }
}
