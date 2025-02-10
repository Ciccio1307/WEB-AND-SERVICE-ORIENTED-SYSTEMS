<?php

use App\Http\Controllers\GiftController;
use App\Http\Controllers\KidController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\kid;
use App\Models\gift;



Route::get('/', function () {
    return view('welcome');
});



Route::post('/kids/filterByGift', function (Request $request) {

    $gift = gift::all();

    $kid = kid::where('gift_id', request('gift_id'))->get();


    return view('kid.list', compact('gift', 'kid'));
});


Route::get(
    '/kids/deleteAll/',
    function () {

        foreach (kid::all() as $item) {
            $item->delete();
        }


        return redirect('/kids');
    }

);











































































































































Route::resource('/gifts', GiftController::class);
Route::resource('/kids', KidController::class);
