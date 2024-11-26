<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Home\About;
use Illuminate\Http\Request;

class ProjectManagerController extends Controller
{
    public function index()
    {
        $abouts = About::all(); // Obtener todos los registros de About
        return view('admin.dashboard.project_manager.index', compact('abouts'));
    }
}
