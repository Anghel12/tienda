<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserStatusController extends Controller
{
     // Método para activar un usuario
     public function activate($id)
     {
         $user = User::findOrFail($id);
         $user->active_status = 1; // Asignar el estado activo
         $user->save();
 
         return redirect()->back()->with('status', 'User activated successfully!');
     }
 
     // Método para desactivar un usuario
     public function deactivate($id)
     {
         $user = User::findOrFail($id);
         $user->active_status = 0; // Asignar el estado inactivo
         $user->save();
 
         return redirect()->back()->with('status', 'User deactivated successfully!');
     }
}
