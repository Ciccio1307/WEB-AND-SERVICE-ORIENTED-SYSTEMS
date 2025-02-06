<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Models\genre;
use App\Models\film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/films/postYear', function () {

    foreach (film::all() as $film) {
        $film->year = $film->year + 1;
        $film->save();
    }


    return redirect('/films');
});


Route::post('/films/filterByGenre', function (Request $request) {
    $film = film::where('genre_id', request('genre_id'))->get();
    $genre = genre::all();
    return view('film.list', compact('film', 'genre'));
});














































































































































































Route::resource('/genres', GenreController::class);
Route::resource('/films', FilmController::class);
