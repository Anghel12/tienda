<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Home\Content;
use App\Models\Home\About;
use App\Models\Home\MeetUs;
use App\Models\Home\Membership;
use App\Models\Home\Package;
use App\Models\Home\Service;
use App\Models\Home\Subscription;
use App\Models\OrderCoin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllHomeContentController extends Controller
{
    public function all_bd_index()
    {

        $membership = Membership::first();
        $about = About::first();
        $package = Package::first();
        $meet_us = MeetUs::all();
        $services = Service::all(); // 4 servicios
        $content = Content::first(); // Suponiendo que solo hay un registro de contenido
        return view('posts.index', compact('content', 'meet_us', 'services', 'package', 'about', 'membership'));
    }//

    public function terms()
    {

        return view('terms');
    }//


    public function user_contact()
    {

        return view('user_contact');
    }//
}
