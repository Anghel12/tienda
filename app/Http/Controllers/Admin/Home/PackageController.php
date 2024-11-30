<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Home\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
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
        $packages = Package::all();
        return view('admin.home.packages.index', compact('packages'));
    }

    public function create()
    {
        return view('admin.home.packages.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'body' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Package::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
        ]);

        return redirect()->route('admin.home.packages.index')->with('success', 'Package created successfully.');
    }

    public function show($id)
    {
        $package = Package::findOrFail($id);
        return view('admin.home.packages.show', compact('package'));
    }

    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view('admin.home.packages.edit', compact('package'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'body' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $package = Package::findOrFail($id);
        $package->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
        ]);

        return redirect()->route('admin.home.packages.index')->with('success', 'Package updated successfully.');
    }

    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->delete();
        return redirect()->route('admin.home.packages.index')->with('success', 'Package deleted successfully.');
    }
}
