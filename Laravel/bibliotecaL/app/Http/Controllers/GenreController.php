<?php

namespace App\Http\Controllers;

use App\Models\genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = genre::all();
        return view('genre.list', compact('genres'));
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
        $genres = new genre();
        $genres->name = request('name');
        $genres->save();
        return (redirect('/genres'));
    }

    /**
     * Display the specified resource.
     */
    public function show(genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(genre $genre)
    {
        return view('genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, genre $genre)
    {
        $genre->name = request('name');
        $genre->save();
        return (redirect('/genres'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(genre $genre)
    {
        $genre->delete();
        return (redirect('/genres'));
    }
}
