<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\loans;
use Illuminate\Http\Request;

class LoansController extends Controller
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
        return view('admin.Loans.index');
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
     * @param  \App\Models\loans  $loans
     * @return \Illuminate\Http\Response
     */
    public function show(loans $loans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\loans  $loans
     * @return \Illuminate\Http\Response
     */
    public function edit(loans $loans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\loans  $loans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, loans $loans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\loans  $loans
     * @return \Illuminate\Http\Response
     */
    public function destroy(loans $loans)
    {
        //
    }
}
