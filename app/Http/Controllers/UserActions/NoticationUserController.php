<?php

namespace App\Http\Controllers\UserActions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticationUserController extends Controller
{
    //
    public function index()
    {
        $user = auth()->user();
        $unreadNotifications = $user->unreadNotifications;
        $readNotifications = $user->readNotifications;

        return view('notifications.index', compact('unreadNotifications', 'readNotifications'));
    }

    public function markAsRead($id)
{
    $user = auth()->user();
    $notification = $user->notifications()->find($id);

    if ($notification) {
        $notification->markAsRead();
    }

    return redirect()->back()->with('success', 'Notificación marcada como leída.');
}

public function destroy($id)
{
    $user = auth()->user();
    $notification = $user->notifications()->find($id);

    if ($notification) {
        $notification->delete();
    }

    return redirect()->back()->with('success', 'Notificación eliminada.');
}



}
