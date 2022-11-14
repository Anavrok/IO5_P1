<?php

namespace App\Http\Controllers;

use App\Models\Followers;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFollowersRequest;
use App\Http\Requests\UpdateFollowersRequest;

class FollowersController extends Controller
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
     * @param  \App\Http\Requests\StoreFollowersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFollowersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Followers  $followers
     * @return \Illuminate\Http\Response
     */
    public function show(Followers $followers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Followers  $followers
     * @return \Illuminate\Http\Response
     */
    public function edit(Followers $followers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFollowersRequest  $request
     * @param  \App\Models\Followers  $followers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFollowersRequest $request, Followers $followers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Followers  $followers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Followers $followers)
    {
        //
    }
}
