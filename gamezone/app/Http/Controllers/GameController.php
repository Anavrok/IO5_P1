<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Game;
use App\Models\GameUser;
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

    public function create2(Game $game)
    {
        $gameusers = GameUser::all();

        return view('creates.shop_all',compact('game','gameusers'));
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

    public function store2(StoreGameRequest $request)
    {
        DB::beginTransaction();
            $zaplac = $request->input('value');
            $user = $request->get('user_id');
            $gra = $request->get('game_id');

           

            DB::update('update users set account_balance = account_balance - ? where id = ?',[$zaplac, $user]);
            //Konto_Klienta::where('id', $odbiorca)->update(['saldo' => $suma]);

        DB::commit();

        request()->validate([
            'game_id' => 'required',
            'user_id' => 'required',
        ]);

        GameUser::create([
            'game_id' => request('game_id'),
            'user_id' => request('user_id'),
        ]);

        return redirect('/shop_all');
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
            $games = Game::select(\DB::raw("id, image, value, SUBSTR(title, 1, 1) as tit"))->where('title','LIKE',"%{$search}%")->orderBy('title', 'ASC')->get();
        } else {
            $games = Game::select(\DB::raw("id, image, value, SUBSTR(title, 1, 1) as tit"))->orderBy('title', 'ASC')->get();
        }

        $tmp = " ";

        $gameusers = GameUser::all();

        return view('shop_all', compact('games','tmp','gameusers'));
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
