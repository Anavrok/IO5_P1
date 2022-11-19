<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request()->query('search');
        if ($search) {
            $games = Game::where('title','LIKE',"%{$search}%")->paginate(4);
        } else {
            $games = Game::paginate(4);
        }

        return view('dashboards.admins.games', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $games = Game::all();

        return view('dashboards.admins.creates.games_create',compact('games'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGameRequest $request)
    {
        request()->validate([
            'title' => 'required',
            'genre' => 'required',
            'value' => 'required',
            'release_date' => 'required',
            'image' => 'required',
        ]);

        Game::create([
            'title' => request('title'),
            'genre' => request('genre'),
            'value' => request('value'),
            'release_date' => request('release_date'),
            'image' => request('image'),
        ]);

        return redirect('/admin/games');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show1()
    {

        $games = Game::orderBy('release_date', 'DESC')->paginate(5);

        return view('shop', compact('games'));
    }

    public function show2()
    {
        $search = request()->query('search');
        if ($search) {
            $games = Game::select(\DB::raw("image, value, SUBSTR(title, 1, 1) as tit"))->where('title','LIKE',"%{$search}%")->orderBy('title', 'ASC')->get();
        } else {
            $games = Game::select(\DB::raw("image, value, SUBSTR(title, 1, 1) as tit"))->orderBy('title', 'ASC')->get();
        }

        $tmp = " ";

        return view('shop_all', compact('games','tmp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('dashboards.admins.edits.games_edit',compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGameRequest  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGameRequest $request, Game $game)
    {
        request()->validate([
            'title' => 'required',
            'genre' => 'required',
            'value' => 'required',
            'release_date' => 'required',
            'image' => 'required',
        ]);

        $game->update([
            'title' => request('title'),
            'genre' => request('genre'),
            'value' => request('value'),
            'release_date' => request('release_date'),
            'image' => request('image'),
        ]);

        return redirect('/admin/games');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game -> delete();

        return redirect('/admin/games');
    }
}
