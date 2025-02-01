<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use App\Models\team;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/teams', TeamController::class);
Route::resource('/players', PlayerController::class);

Route::get('/team/order', function () {
    $teams = team::orderBy('punti', 'desc')->get();
    return view('team.list', compact('teams'));
});

Route::get('/team/filterPoint', function () {
    $teams = team::where('punti', '>=', 45)->orderBy('point', 'desc')->get();
    return view('team.list', compact('teams'));
});

Route::get('/team/deletePoint', function () {
    $teams = team::where('punti', '<=', 1000)->delete();
    return redirect('team');
});
