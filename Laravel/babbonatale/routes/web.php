<?php

use App\Http\Controllers\KidController;
use App\Http\Controllers\PresentController;
use App\Models\kid;
use App\Models\present;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Aggiungere una funzionalità per rendere tutti i bambini buoni con un solo comando.
Route::get(
    'kids/allBoysAreGood',
    function () {
        foreach (kid::all() as $item) {
            $item->good = 1;
            $item->save();
        }


        return redirect('/kids');
    }
);

// Aggiungere una funzionalità per rendere tutti i bambini cattivi con un solo comando.

Route::get(
    'kids/allBoysAreBad',
    function () {
        foreach (kid::all() as $item) {
            $item->good = 0;
            $item->save();
        }


        return redirect('/kids');
    }
);

// Ogni volta che un bambino diventa cattivo, il suo regalo viene rimosso automaticamente.

Route::get(
    'kids/DeleteBadGuy',
    function () {
        foreach (kid::all() as $item) {
            if ($item->good == 0)
                $item->delete();
        }


        return redirect('/presents');
    }
);












Route::resource('/kids', KidController::class);
Route::resource('/presents', PresentController::class);
