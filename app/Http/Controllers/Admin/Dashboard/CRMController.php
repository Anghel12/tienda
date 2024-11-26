<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Home\About;
use Illuminate\Http\Request;

class CRMController extends Controller
{
    public function index()
    {
        $abouts = About::all(); // Obtener todos los registros de About
        return view('admin.dashboard.crm.index', compact('abouts'));
    }
}
