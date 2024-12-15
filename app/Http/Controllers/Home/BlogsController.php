<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $blogs = Blogs::all();

        return view('home.blogs.indexblog', compact('blogs' ));
    }

  


    public function show($slug)
    {
        $blog = Blogs::where('slug', $slug)->firstOrFail();
    
        // Registrar la vista
        $blog->registerView('Blogs');
    
        // Obtener blogs similares
        $similares = Blogs::all();
    
        return view('home.blogs.show', compact('blog', 'similares'));
    }

}
