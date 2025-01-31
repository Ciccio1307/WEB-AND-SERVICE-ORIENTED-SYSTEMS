<?php

namespace App\Http\Controllers;

use App\Models\place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $place = place::all();
        return view('place.list', compact('place'));
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
        $place = new place();
        $place->name = request('name');
        $place->abitanti = request('abitanti');
        $place->nazione = request('nazione');
        $place->save();
        return redirect('/places');
    }

    /**
     * Display the specified resource.
     */
    public function show(place $place)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(place $place)
    {
        return view('place.edit', compact('place'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, place $place)
    {
        $place->name = request('name');
        $place->abitanti = request('abitanti');
        $place->nazione = request('nazione');
        $place->save();
        return redirect('/places');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(place $place)
    {
        $place->delete();
        return redirect('/places');
    }
}
