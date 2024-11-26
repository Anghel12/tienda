<?php

namespace App\Http\Livewire\UserActions\TransferCoins;

use App\Models\User;
use Livewire\Component;

class EnviarIndex extends Component
{

    public $searchTerm = '';
    public $searchResults = [];
    public $selectedUser = null;

    public function updatedSearchTerm()
    {
        if ($this->searchTerm !== '') {
            $this->searchUsers();
        } else {
            $this->searchResults = [];
        }
    }

    public function searchUsers()
    {
        $this->searchResults = User::where('name', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('email', 'like', '%' . $this->searchTerm . '%')
            ->take(5)
            ->get();
    }

    public function selectUser($userId)
    {
        $this->selectedUser = User::find($userId);
        $this->searchTerm = $this->selectedUser->email; // Autocompletar el email seleccionado
        $this->searchResults = []; // Ocultar resultados de búsqueda
    }

    public function render()
    {
        return view('livewire.user-actions.transfer-coins.enviar-index');
    }
}