<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){

        return view('dashboards.users.index');
    }

    function profile(){
        return view('dashboards.users.profile');
    }
    
    function ticket(){
        return view('dashboards.users.settings');
    }

}
