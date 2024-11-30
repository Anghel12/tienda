<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeContactDetails;
use Illuminate\Http\Request;

class HomeContactDetailsController extends Controller
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
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeContactDetails  $homeContactDetails
     * @return \Illuminate\Http\Response
     */
    public function show(HomeContactDetails $homeContactDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeContactDetails  $homeContactDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeContactDetails $homeContactDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeContactDetails  $homeContactDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeContactDetails $homeContactDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeContactDetails  $homeContactDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeContactDetails $homeContactDetails)
    {
        //
    }
}
