<?php

namespace App\Http\Controllers;

use App\Models\Levels;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLevelsRequest;
use App\Http\Requests\UpdateLevelsRequest;

class LevelsController extends Controller
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
     * @param  \App\Http\Requests\StoreLevelsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLevelsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Levels  $levels
     * @return \Illuminate\Http\Response
     */
    public function show(Levels $levels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Levels  $levels
     * @return \Illuminate\Http\Response
     */
    public function edit(Levels $levels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLevelsRequest  $request
     * @param  \App\Models\Levels  $levels
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLevelsRequest $request, Levels $levels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Levels  $levels
     * @return \Illuminate\Http\Response
     */
    public function destroy(Levels $levels)
    {
        //
    }
}
