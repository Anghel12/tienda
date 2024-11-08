<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NotificationsAllViews extends Component
{

    public $notifications;

    public function mount()
    {
        $user = Auth::user();

        if ($user) {
            if ($user->hasRole('Admin')) {
                $this->notifications = $user->notifications->where('data.type', 'Admin')->sortByDesc('created_at');
            } else {
                $this->notifications = $user->notifications->where('data.type', 'User')->sortByDesc('created_at');
            }
        }
    }

    public function markAsRead($id)
    {
        $notification = Auth::user()->notifications()->find($id);
        if ($notification) {
            $notification->markAsRead();
        }
    
        // Redireccionar dependiendo del rol del usuario
        if (Auth::user()->hasRole('Admin')) {
            return redirect()->route('admin.order_coins.show', $notification->data['order_id']);
        } else {
            return redirect()->route('user_actions.order_vouchers.show', $notification->data['order_id']);
        }
    }
    

    public function render()
    {
        return view('livewire.notifications-all-views');
    }
}
