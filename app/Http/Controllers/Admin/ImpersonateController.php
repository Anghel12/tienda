<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImpersonateController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.roles.index')->only('index');
        $this->middleware('can:admin.roles.create')->only('create', 'store');
        $this->middleware('can:admin.roles.edit')->only('edit', 'update');
        $this->middleware('can:admin.roles.destroy')->only('destroy'); 
    } 

    public function start(User $user)
    {
        session()->put('impersonated_by', auth()->id());

        Auth::login($user);
        return redirect('/');
    }
    public function stop(){
        
        $user = auth()->user();

        Auth::loginUsingId( session()->pull('impersonated_by'));

        return redirect()->route('admin.users.show', compact('user'));
    }
}

