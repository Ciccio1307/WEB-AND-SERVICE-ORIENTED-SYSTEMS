<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\genre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = book::all();
        $genres = genre::all();
        return view('book.list', compact('books', 'genres'));
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
        $books = new book();
        $books->name = request('name');
        $books->author = request('author');
        $books->year = request('year');
        $books->genre_id = request('genre_id');
        $books->save();
        return redirect("/books");
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

        $genres = genre::all();
        return view('book.edit', compact('book', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, book $book)
    {
        $book->name = request('name');
        $book->author = request('author');
        $book->year = request('year');
        $book->genre_id = request('genre_id');
        $book->save();
        return redirect("/books");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book)
    {
        $book->delete();
        return redirect("/books");
    }
}
