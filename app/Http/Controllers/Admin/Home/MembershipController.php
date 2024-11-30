<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Home\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MembershipController extends Controller
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
        $memberships = Membership::all();
        return view('admin.home.memberships.index', compact('memberships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.memberships.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
            'subtitle' => 'required',
            'sub_body' => 'required',
            'price_title' => 'required',
            'price' => 'required',
            'offer' => 'required',
        ]);

        Membership::create($request->all());

        return redirect()->route('admin.home.memberships.index')
            ->with('success', 'Membership creado correctamente.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function edit(Membership $membership)
    {
        return view('admin.home.memberships.edit', compact('membership'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membership $membership)
    {
        Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
            'subtitle' => 'required',
            'sub_body' => 'required',
            'price_title' => 'required',
            'price' => 'required',
            'offer' => 'required',
        ]);

        $membership->update($request->all());

        return redirect()->route('admin.home.memberships.index')
            ->with('success', 'Membership actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membership $membership)
    {
        $membership->delete();

        return redirect()->route('admin.home.memberships.index')
            ->with('success', 'Membership eliminado correctamente.');
    }
}
