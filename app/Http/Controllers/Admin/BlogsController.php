<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
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
        return view('admin.blogs.index', compact('blogs'));
    }
    
    public function create()
    {
        return view('admin.blogs.create');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs|max:255',
            'body' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);
    
        Blogs::create($validatedData);
    
        return redirect()->route('admin.blogs.index')->with('success', 'Blog creado con éxito');
    }
    
    public function show($id)
    {
        $blog = Blogs::findOrFail($id);
        return view('admin.blogs.show', compact('blog'));
    }
    
    public function edit($id)
    {
        $blog = Blogs::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }
    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs,slug,' . $id,
            'body' => 'required',
        ]);
    
        $blog = Blogs::findOrFail($id);
        $blog->update($validatedData);
    
        return redirect()->route('admin.blogs.index')->with('success', 'Blog actualizado con éxito');
    }
    
    public function destroy($id)
    {
        $blog = Blogs::findOrFail($id);
        $blog->delete();
    
        return redirect()->route('admin.blogs.index')->with('success', 'Blog eliminado con éxito');
    }
}   
