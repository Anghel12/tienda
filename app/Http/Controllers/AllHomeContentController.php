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
use Illuminate\Support\Facades\Cache;

class AllHomeContentController extends Controller
{
    public function all_bd_index()
    {
        // Falta poner que borren cache en los cruds
        $membership = Cache::remember('membership', now()->addMonths(6), function () {
            return Membership::first();
        });
    
        $about = Cache::remember('about', now()->addMonths(6), function () {
            return About::first();
        });
    
        $package = Cache::remember('package', now()->addMonths(6), function () {
            return Package::first();
        });
    
        $meet_us = Cache::remember('meet_us', now()->addMonths(6), function () {
            return MeetUs::all();
        });
    
        $services = Cache::remember('services', now()->addMonths(6), function () {
            return Service::all();
        });
    
        $content = Cache::remember('content', now()->addMonths(6), function () {
            return Content::first();
        });
    
        return view('posts.index', compact('content', 'meet_us', 'services', 'package', 'about', 'membership'));
    }
    

    public function terms()
    {

        return view('terms');
    }//


    public function user_contact()
    {

        return view('user_contact');
    }//
}
