<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use App\Notifications\MyNotification;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{

    /* admin y usuario lo ven diferente arreglar que solo el usuario tnega esta vista  */

    public function index()
    {
        $user = Auth::user();
    
        // Obtener las notificaciones según el rol del usuario (User o Admin)
        if ($user->hasRole('Admin')) {
            $notifications = $user->notifications->where('data.type', 'Admin')->sortByDesc('created_at');
        } else {
            $notifications = $user->notifications->where('data.type', 'User')->sortByDesc('created_at');
        }
    
        // Renderizar la vista y pasar las notificaciones filtradas
        return view('admin.notifications.index', compact('notifications'));
    }
    


  /*   public function adminNotifications()
    {
        $notifications = Auth::user()->notifications->where('data.type', 'Admin')->sortByDesc('created_at');
        return view('admin.notifications.index', compact('notifications'));
    } */

    public function markAsRead($id)
    {
        $notification = Auth::user()->notifications()->find($id);
        if ($notification) {
            $notification->markAsRead();
        }

        return back();
    }


    /**
     * Envía una notificación al usuario especificado.
     *
     * @param  \App\User  $user
     * @param  string  $message
     * @return void
     */
    public function sendNotification(User $user, $message)
    {
        // Crea una nueva notificación
        $notification = new MyNotification($message);

        // Envía la notificación al usuario
        $user->notify($notification);

        // Emitir un evento Pusher para notificar al usuario en tiempo real
        $data = [
            'message' => $message,
            'link' => route('admin.notifications.index')
        ];
        event(new \App\Events\NewNotification($data));
    }


/*     public function index()
{
    // Obtener las notificaciones del usuario logueado
    $userNotifications = Auth::user()->notifications->where('data.type', 'User')->sortByDesc('created_at');
    $adminNotifications = Auth::user()->notifications->where('data.type', 'Admin')->sortByDesc('created_at');
    
    // Verificar si hay notificaciones de tipo 'User' o 'Admin'
    return view('admin.notifications.index', [
        'userNotifications' => $userNotifications,
        'adminNotifications' => $adminNotifications
    ]);


    <h3>Notificaciones de Usuario</h3>
@foreach ($userNotifications as $notification)
    <!-- Aquí el contenido de cada notificación -->
@endforeach

<h3>Notificaciones de Admin</h3>
@foreach ($adminNotifications as $notification)
    <!-- Aquí el contenido de cada notificación -->
@endforeach

} */

}
