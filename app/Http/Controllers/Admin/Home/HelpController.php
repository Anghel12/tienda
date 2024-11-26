<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeHelp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HelpController extends Controller
{
    public function index()
    {
        $helps = HomeHelp::all();
        return view('admin.home.helps.index', compact('helps'));
    }

    public function create()
    {
        return view('admin.home.helps.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        HomeHelp::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'user_id' => Auth::id(), // Asumiendo que el usuario está logueado
        ]);

        return redirect()->route('admin.home.helps.index')->with('success', 'Ayuda creada con éxito.');
    }

    public function show($id)
    {
        $help = HomeHelp::findOrFail($id);
        return view('admin.home.helps.show', compact('help'));
    }

    public function edit($id)
    {
        $help = HomeHelp::findOrFail($id);
        return view('admin.home.helps.edit', compact('help'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $help = HomeHelp::findOrFail($id);
        $help->update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);

        return redirect()->route('admin.home.helps.index')->with('success', 'Ayuda actualizada con éxito.');
    }

    public function destroy($id)
    {
        $help = HomeHelp::findOrFail($id);
        $help->delete();

        return redirect()->route('admin.home.helps.index')->with('success', 'Ayuda eliminada con éxito.');
    }
}
