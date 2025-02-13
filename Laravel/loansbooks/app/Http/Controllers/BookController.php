<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = book::all();
        return view('book.list', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = new book();
        $book->title = request('title');
        $book->author = request('author');
        $book->genre = request('genre');
        $book->copies = request('copies');
        $book->save();
        return redirect('/books');
    }

    /**
     * Display the specified resource.
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $book)
    {
        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, book $book)
    {
        $book->title = request('title');
        $book->author = request('author');
        $book->genre = request('genre');
        $book->copies = request('copies');
        $book->save();
        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book)
    {
        $book->delete();
        return redirect('/books');
    }
}
