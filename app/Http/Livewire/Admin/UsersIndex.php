<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;


class UsersIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

      /* buscardor de usuarios id= search , funiona para refrescar la pagina a uno */
    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

  /*causa error eliminar la paginate  */

    public function render()
    {
        $users = User::where('name', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('email', 'LIKE', '%' . $this->search . '%')
                        ->latest('id')
                        ->paginate(21);

        
        return view('livewire.admin.users-index', compact('users'));
    }
}
