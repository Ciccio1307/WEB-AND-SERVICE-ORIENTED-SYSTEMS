<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use App\Models\player;
use App\Models\team;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/teams/order', function () {
    $team = team::orderBy('punti', 'desc')->get();
    return view('team.list', compact('team'));
});

Route::get('/teams/filterPoint', function () {
    $team = team::where('punti', '>=', 1000)->orderBy('punti', 'desc')->get();
    return view('team.list', compact('team'));
});

Route::get('/teams/deletePoint', function () {
    team::where('punti', '<=', 1000)->delete();
    return redirect('teams');
});

Route::get('/players/filterFM', function () {
    $player = player::where('fantamedia', '>=', 7)->get();
    $team = team::all();
    return view('player.list', compact('player', 'team'));
});

Route::post('/players/findByTeam', function (Request $request) {
    $player = player::where('team_id', request('team_id'))->get();
    $team = team::all();
    return view("player.list", compact('player', 'team'));
});

Route::post('/players/greaterThanFantamedia', function (Request $request) {
    $player = player::where('fantamedia', '>=', request('fantamedia'))->get();
    $team = team::all();
    return view("player.list", compact('player', 'team'));
});

Route::resource('/teams', TeamController::class);
Route::resource('/players', PlayerController::class);
