<?php

namespace App\Http\Controllers;

use App\Models\tour;
use App\Models\place;

use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $place = place::all();
        $tour = tour::all();

        return view('tour.list', compact('place', 'tour'));
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
        $tour = new tour();
        $tour->name = request('name');
        $tour->place_id = request('place_id');
        $tour->price = request('price');
        $tour->save();
        return redirect('/tours');
    }

    /**
     * Display the specified resource.
     */
    public function show(tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tour $tour)
    {
        $place = place::all();
        return view('tour.edit', compact('tour', 'place'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tour $tour)
    {
        $tour->name = request('name');
        $tour->place_id = request('place_id');
        $tour->price = request('price');
        $tour->save();
        return redirect('/tours');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tour $tour)
    {
        $tour->delete();
        return redirect('/tours');
    }
}
