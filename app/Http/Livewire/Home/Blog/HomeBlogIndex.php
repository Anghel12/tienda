<?php

namespace App\Http\Livewire\Home\Blog;

use App\Models\Blogs;
use App\Models\Post;
use App\Models\Slider;
use Livewire\Component;

class HomeBlogIndex extends Component
{
    public function render()
    {
        $sliders = Slider::all();
        $main_blog = Blogs::latest()->limit(1)->get();
        $blogs = Blogs::latest()->limit(3)->get();
        return view('livewire.home.blog.home-blog-index', compact('sliders', 'blogs', 'main_blog'));
    }
}
