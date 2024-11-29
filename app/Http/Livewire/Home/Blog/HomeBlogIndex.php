<?php

namespace App\Http\Livewire\Home\Blog;

use App\Models\Blogs;
use App\Models\Post;
use App\Models\Slider;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class HomeBlogIndex extends Component
{
    public function render()
    {
          //borrar cache en el crud falta
        $main_blog = Cache::remember('main_blog', now()->addMonths(6), function () {
            return Blogs::latest()->limit(1)->get();
        });
        
        $sliders = Slider::all();
        $main_blog = Blogs::latest()->limit(1)->get();
        $blogs = Blogs::latest()->limit(3)->get();
        return view('livewire.home.blog.home-blog-index', compact('sliders', 'blogs', 'main_blog'));
    }
}
