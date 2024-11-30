<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Home\MeetUs;
use Illuminate\Http\Request;

class MeetUsController extends Controller
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
        $meetUs = MeetUs::all();
        return view('admin.home.meet_us.index', compact('meetUs'));
    }

    public function create()
    {
        return view('admin.home.meet_us.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'body' => 'required|string',
            'extract' => 'nullable|string|max:255',
            'title_button' => 'nullable|string|max:255',
        ]);

        MeetUs::create($request->all());

        return redirect()->route('admin.home.meet_us.index')
                         ->with('success', 'Entry created successfully.');
    }

    public function show(MeetUs $meetUs)
    {
        return view('admin.home.meet_us.show', compact('meetUs'));
    }

    public function edit(MeetUs $meetUs)
    {
        return view('admin.home.meet_us.edit', compact('meetUs'));
    }

    public function update(Request $request, MeetUs $meetUs)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'body' => 'required|string',
            'extract' => 'nullable|string|max:255',
            'title_button' => 'nullable|string|max:255',
        ]);

        $meetUs->update($request->all());

        return redirect()->route('admin.home.meet_us.index')
                         ->with('success', 'Entry updated successfully.');
    }

    public function destroy(MeetUs $meetUs)
    {
        $meetUs->delete();
        return redirect()->route('admin.home.meet_us.index')
                         ->with('success', 'Entry deleted successfully.');
    }
}
 