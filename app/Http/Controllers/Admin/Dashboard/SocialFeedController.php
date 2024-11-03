<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Home\About;
use Illuminate\Http\Request;

class SocialFeedController extends Controller
{
    public function index()
    {
        $abouts = About::all(); // Obtener todos los registros de About
        return view('admin.dashboard.social_feed.index', compact('abouts'));
    }
}
