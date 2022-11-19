<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\GameController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('shop',[GameController::class, 'show1'])->name('shop');
Route::get('shop_all',[GameController::class, 'show2'])->name('shop_all');

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');

    //GAMES
    Route::get('games',[GameController::class, 'index'])->name('admin.games');
    Route::get('games/{game}/edit',[GameController::class, 'edit']);
    Route::put('games/{game}',[GameController::class, 'update']);
    Route::get('games/create',[GameController::class, 'create']);
    Route::post('games',[GameController::class, 'store']);
    Route::delete('games/{game}',[GameController::class,'destroy']);

});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('settings',[UserController::class,'settings'])->name('user.settings');

     //SALDO
     Route::get('saldo',[UserController::class,'saldo'])->name('user.saldo');
     Route::get('saldo/{saldo}/edit',[UserController::class, 'edit_saldo']);
     Route::put('saldo/{saldo}',[UserController::class, 'update_saldo']);
});