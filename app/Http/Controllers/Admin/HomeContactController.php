<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeContact;
use Illuminate\Http\Request;

class HomeContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        // Obtener todos los registros de contactos
        $contacts = HomeContact::all();
        return view('admin.home_contact.index', compact('contacts'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Crear un nuevo registro en la base de datos
        HomeContact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        // Redireccionar con un mensaje de éxito
        return redirect()->back()->with('success', 'Mensaje enviado con éxito.');
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeContact  $homeContact
     * @return \Illuminate\Http\Response
     */
    public function show(HomeContact $homeContact)
    {
        return view('admin.home_contact.show', compact('homeContact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeContact  $homeContact
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeContact $homeContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeContact  $homeContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeContact $homeContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeContact  $homeContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeContact $homeContact)
    {
        //
    }
}
