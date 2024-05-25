<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Home\Content;
use App\Models\Home\About;
use App\Models\Home\Membership;
use App\Models\Home\Package;
use App\Models\Home\Service;
use App\Models\Home\Subscription;
use Illuminate\Http\Request;

class AllHomeContentController extends Controller
{
    public function all_bd_index()
    {
     /*    $subscription = Subscription::first(); */
        $membership = Membership::first();
        $about = About::first();
        $package = Package::first();
        $services = Service::all(); // 4 servicios
        $content = Content::first(); // Suponiendo que solo hay un registro de contenido
        return view('posts.index', compact('content', 'services', 'package', 'about', 'membership'));
    }//
}
