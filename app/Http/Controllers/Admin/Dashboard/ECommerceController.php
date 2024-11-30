<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Home\About;
use Illuminate\Http\Request;

class ECommerceController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.roles.index')->only('index');
        $this->middleware('can:admin.roles.create')->only('create', 'store');
        $this->middleware('can:admin.roles.edit')->only('edit', 'update');
        $this->middleware('can:admin.roles.destroy')->only('destroy'); 
    } 
    public function index()
    {
        $abouts = About::all(); // Obtener todos los registros de About
        return view('admin.dashboard.e_commerces.index', compact('abouts'));
    }
}
