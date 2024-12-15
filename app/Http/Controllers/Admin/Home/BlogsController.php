<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BlogsController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.roles.index')->only('index');
        $this->middleware('can:admin.roles.create')->only('create', 'store');
        $this->middleware('can:admin.roles.edit')->only('edit', 'update');
        $this->middleware('can:admin.roles.destroy')->only('destroy'); 
    } 
    
    public function store(Request $request)
    {
        // Validación de los campos
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required',
         /*    'urls' => 'nullable|array', // Si se suben imágenes
            'urls.*' => 'nullable|url', // Validar las URLs de las imágenes */
            'main_image_id' => 'nullable|integer', // Imagen principal
        ]);
    
        // Crear el blog
        $blog = Blogs::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title), // Generar el slug a partir del título
            'body' => $request->body,
            'user_id' => auth()->id(), // Asignar el usuario autenticado
        ]);
    
        // Si se han subido imágenes
        if ($request->has('urls')) {
            foreach ($request->urls as $index => $url) {
                // Crear la imagen asociada al blog
                $newImage = $blog->images()->create([
                    'url' => $url, // URL de la imagen
                    'is_main' => $request->main_image_id === 'new' && $index === array_key_last($request->urls), // Marcar como principal si es la última imagen
                ]);
            }
        }
    
        // Redirigir con mensaje de éxito
        return redirect()->route('admin.blogs.index')->with('success', 'Blog creado con éxito');
    }
    
    
    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            
            'body' => 'required',
        ]);


        $blog = Blogs::findOrFail($id);
        if ($request->has('urls')) {
            foreach ($request->urls as $index => $url) {
                $image = $blog->images()->skip($index)->first(); // Encuentra la imagen actual correspondiente
    
                if ($image) {
                    $image->update([
                        'url' => $url, // Actualiza la URL
                        'is_main' => $request->main_image_id == $image->id, // Verifica si esta es la imagen principal
                    ]);
                } else {
                    // Si no hay imagen en este índice, significa que es una nueva imagen
                    $newImage = $blog->images()->create([
                        'url' => $url,
                        'is_main' => $request->main_image_id === 'new' && $index === array_key_last($request->urls), // Si es la última imagen y está marcada como principal
                    ]);
                }
            }
        }

    
       
        $blog->update($validatedData);
    
        return redirect()->route('admin.blogs.index')->with('success', 'Blog actualizado con éxito');
    }
    
    public function destroy($id)
    {
        $blog = Blogs::findOrFail($id);
        $blog->delete();
    
        return redirect()->route('admin.blogs.index')->with('success', 'Blog eliminado con éxito');
    }


  
    public function index()
    {
        $blogs = Blogs::all();
        return view('admin.blogs.index', compact('blogs'));
    }
    
    public function create()
    {
        return view('admin.blogs.create');
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
}   
