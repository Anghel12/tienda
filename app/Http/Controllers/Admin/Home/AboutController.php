<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Home\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.roles.index')->only('index');
        $this->middleware('can:admin.roles.create')->only('create', 'store');
        $this->middleware('can:admin.roles.edit')->only('edit', 'update');
        $this->middleware('can:admin.roles.destroy')->only('destroy'); 
    } 
    public function index()
    {
        $abouts = About::all(); // Obtener todos los registros de About
        return view('admin.home.abouts.index', compact('abouts'));
    } 

    public function create()
    {
        return view('admin.home.abouts.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'body' => 'nullable|string',
            'miembro' => 'nullable|integer',
        ]);

        // Crear un nuevo objeto About con los datos proporcionados
        About::create($request->all());

        // Redirigir al usuario a la página de índice con un mensaje de éxito
        return redirect()->route('admin.home.abouts.index')->with('success', 'About creado correctamente.');
    }

    public function edit(About $about)
    {
        return view('admin.home.abouts.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        // Validar los datos del formulario
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'body' => 'nullable|string',
            'miembro' => 'nullable|integer',
        ]);

        // Actualizar el objeto About con los datos proporcionados
        $about->update($request->all());

        // Redirigir al usuario a la página de índice con un mensaje de éxito
        return redirect()->route('admin.home.abouts.index')->with('success', 'About actualizado correctamente.');
    }

    public function destroy(About $about)
    {
        // Eliminar el objeto About
        $about->delete();

        // Redirigir al usuario a la página de índice con un mensaje de éxito
        return redirect()->route('admin.home.abouts.index')->with('success', 'About eliminado correctamente.');
    }
}
