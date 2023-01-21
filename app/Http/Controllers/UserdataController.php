<?php

namespace App\Http\Controllers;

use App\Models\Userdata;
use App\Http\Requests\StoreUserdataRequest;
use App\Http\Requests\UpdateUserdataRequest;

class UserdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Http\Requests\StoreUserdataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserdataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Userdata  $userdata
     * @return \Illuminate\Http\Response
     */
    public function show(Userdata $userdata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Userdata  $userdata
     * @return \Illuminate\Http\Response
     */
    public function edit(Userdata $userdata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserdataRequest  $request
     * @param  \App\Models\Userdata  $userdata
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserdataRequest $request, Userdata $userdata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Userdata  $userdata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userdata $userdata)
    {
        //
    }
}
