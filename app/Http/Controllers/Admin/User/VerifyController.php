<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User\Verify;
use Illuminate\Http\Request;

class VerifyController extends Controller 
{
    public function index()
    { 
        $verifies = Verify::all();
        return view('user_actions.verify_profiles.index');
    }

    public function show()
    { 
        $verifies = Verify::all();
        return view('admin.verifies.show');
    }
}
