<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\User\SupportMessage;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SupportChat extends Component
{
    public $messages = [];
    public $messageText;
    public $from_id;
    public $to_id;
    public $searchTerm = ''; // Nueva propiedad para el término de búsqueda
    public $users = []; // Usuarios encontrados en la búsqueda

    public function mount($to_id = null)
    {
        $this->from_id = Auth::id();
        $this->to_id = $to_id;
        $this->loadMessages();
    }

    public function loadMessages()
    {
        if ($this->to_id) {
            $this->messages = SupportMessage::where(function ($query) {
                $query->where('from_id', $this->from_id)
                      ->where('to_id', $this->to_id);
            })
            ->orWhere(function ($query) {
                $query->where('from_id', $this->to_id)
                      ->where('to_id', $this->from_id);
            })
            ->get()
            ->toArray();
        }
    }

    public function searchUsers()
    {
        if ($this->searchTerm) {
            $this->users = User::where('name', 'like', '%' . $this->searchTerm . '%')
                                ->where('id', '<>', $this->from_id)
                                ->take(5) // Limita a 5 resultados
                                ->get()
                                ->toArray();
        } else {
            $this->users = [];
        }
    }

    public function selectUser($userId)
    {
        $this->to_id = $userId;
        $this->searchTerm = '';
        $this->users = [];
        $this->loadMessages();
    }

    public function sendMessage()
    {
        if ($this->messageText && $this->to_id) {
            $message = SupportMessage::create([
                'from_id' => $this->from_id,
                'to_id' => $this->to_id,
                'body' => $this->messageText,
                'seen' => false,
            ]);

            $this->messages[] = $message->toArray();
            $this->messageText = '';
        }
    }

    public function render()
    {
        return view('livewire.support-chat');
    }
}