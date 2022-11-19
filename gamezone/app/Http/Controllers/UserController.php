<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Game;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index(){
        $games = DB::table('games')
            ->selectRaw('*')
            ->join('game_users','games.id','=','game_users.game_id')
            ->join('users','users.id','=','game_users.user_id')
            ->where('game_users.user_id','=',Auth()->user()->id)
            ->orderBy('title', 'ASC')
            ->get();

        return view('dashboards.users.index', compact('games'));
    }

    function profile(){
        return view('dashboards.users.profile');
    }
    
    function ticket(){
        return view('dashboards.users.settings');
    }

    function saldo(){ 
        $users = User::all();

        return view('dashboards.users.saldo',compact('users'));
    }

    function edit_saldo(User $saldo){ 
        $users = User::all();

        return view('dashboards.users.edits.saldo',compact('saldo','users'));
    }

    function update_saldo(Request $request, User $saldo){ 
        
        request()->validate([
            'account_balance' => 'required',
        ]);

        $saldo->update([
            'account_balance' => request('account_balance'),
        ]);

        return redirect('/user/saldo');
    }
}
