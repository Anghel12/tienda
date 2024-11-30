<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlockedFollow;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BlockedFollowController extends Controller
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
        return view('admin.blocked_followers.index');
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
     * @param  \App\Models\BlockedFollow  $blockedFollow
     * @return \Illuminate\Http\Response
     */
    public function show(BlockedFollow $blockedFollow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlockedFollow  $blockedFollow
     * @return \Illuminate\Http\Response
     */
    public function edit(BlockedFollow $blockedFollow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlockedFollow  $blockedFollow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlockedFollow $blockedFollow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlockedFollow  $blockedFollow
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlockedFollow $blockedFollow)
    {
        //
    }
}
