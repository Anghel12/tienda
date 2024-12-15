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
            return Blogs::with('views')->latest()->limit(1)->get();
        });
  /*       
        $sliders = Slider::all(); */
        $blogs = Blogs::latest()->get();
        return view('livewire.home.blog.home-blog-index', compact( 'blogs', 'main_blog'));
    }
}
