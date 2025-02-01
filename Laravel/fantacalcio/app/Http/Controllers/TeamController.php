<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team  = team::all();
        return view('team.list', compact('team'));
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
        $team = new team();
        $team->name = request('name');
        $team->punti = request('punti');
        $team->save();
        return redirect('/teams');
    }

    /**
     * Display the specified resource.
     */
    public function show(team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(team $team)
    {
        return view('team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, team $team)
    {
        $team->name = request('name');
        $team->punti = request('punti');
        $team->save();
        return redirect('/teams');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(team $team)
    {
        $team->delete();
        return redirect('/teams');
    }
}
