<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $content = Content::first(); // Suponiendo que solo hay un registro de contenido
        return view('admin.content.index', compact('content'));
    }

    public function show($id)
    {
        $content = Content::findOrFail($id);
        return view('admin.content.show', compact('content'));
    }

    public function edit($id)
    {
        $content = Content::findOrFail($id);
        return view('admin.content.edit', compact('content'));
    }

    public function update(Request $request, $id)
    {
        $content = Content::findOrFail($id);
        $content->update($request->all());
        return redirect()->route('admin.content.index')->with('success', 'Content updated successfully');
    }

    public function destroy($id)
    {
        $content = Content::findOrFail($id);
        $content->delete();
        return redirect()->route('admin.content.index')->with('success', 'Content deleted successfully');
    }
}
