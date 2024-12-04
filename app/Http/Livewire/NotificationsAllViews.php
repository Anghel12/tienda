<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NotificationsAllViews extends Component
{
    public $notifications;
    public $unreadNotificationsCount = 0;

    public function mount()
    {
        $user = Auth::user();

        if ($user) {
            $type = $user->hasRole('Admin') ? 'Admin' : 'User';

            // Eager load notifications to prevent N+1 query issue
            $this->notifications = $user->notifications()
                ->where('data->type', $type)
                ->orderByDesc('created_at')
                ->get();

            // Contar las notificaciones no leídas
            $this->unreadNotificationsCount = $user->unreadNotifications()
                ->where('data->type', $type)
                ->count();
        }
    }

    public function markAsRead($id)
    {
        $user = Auth::user();
        $notification = $user->notifications()->find($id);

        if ($notification) {
            $notification->markAsRead();
            $route = $user->hasRole('Admin') 
                ? 'admin.order_coins.show' 
                : 'user_actions.order_vouchers.show';

            return redirect()->route($route, $notification->data['order_id']);
        }
    }

    public function render()
    {
        return view('livewire.notifications-all-views', [
            'notifications' => $this->notifications,
            'unreadNotificationsCount' => $this->unreadNotificationsCount,
        ]);
    }
}
