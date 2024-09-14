<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DevTools;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;


class DevToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{

    return view('admin.DevTools.index');
}

    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.DevTools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DevTools  $devTools
     * @return \Illuminate\Http\Response
     */
    public function show($model)
    {
        return view('admin.DevTools.create', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DevTools  $devTools
     * @return \Illuminate\Http\Response
     */
    public function edit(DevTools $devTools)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DevTools  $devTools
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DevTools $devTools)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DevTools  $devTools
     * @return \Illuminate\Http\Response
     */
    public function destroy(DevTools $devTools)
    {
        //
    }
}
