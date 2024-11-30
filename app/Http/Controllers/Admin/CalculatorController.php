<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Calculator;
use Illuminate\Http\Request;

class CalculatorController extends Controller
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
        $calculadoras = Calculator::all();
        return view('admin.Calculators.index', compact('calculadoras'));
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
     * @param  \App\Models\Calculator  $calculator
     * @return \Illuminate\Http\Response
     */
    public function show(Calculator $calculator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calculator  $calculator
     * @return \Illuminate\Http\Response
     */
    public function edit(Calculator $calculator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calculator  $calculator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calculator $calculator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calculator  $calculator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calculator $calculator)
    {
        //
    }
}
