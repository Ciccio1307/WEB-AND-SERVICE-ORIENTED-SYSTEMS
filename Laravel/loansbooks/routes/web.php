<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use App\Models\book;
use App\Models\loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

Route::get('/', function () {
    return view('welcome');
});


Route::get(
    '/loans/filterById/{id}',
    function ($id) {

        $loan = loan::where('book_id', $id)->get();
        $book = book::all();
        return view('loan.list', compact('loan', 'book'));
    }
);




Route::post(
    '/loans/filterById',
    function (Request $request) {

        $book = book::all();
        $loan = loan::where('book_id', request('book_id'))->get();

        return view('loan.list', compact('loan', 'book'));
    }







);
















Route::resource('/books', BookController::class);
Route::resource('/loans', LoanController::class);
