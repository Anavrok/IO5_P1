<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGamesRequest;
use App\Http\Requests\UpdateGamesRequest;

class GamesController extends Controller
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
     * @param  \App\Http\Requests\StoreGamesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGamesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function show(Games $games)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function edit(Games $games)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGamesRequest  $request
     * @param  \App\Models\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGamesRequest $request, Games $games)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function destroy(Games $games)
    {
        //
    }
}
