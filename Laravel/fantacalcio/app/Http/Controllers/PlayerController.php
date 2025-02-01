<?php

namespace App\Http\Controllers;

use App\Models\team;

use App\Models\player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team  = team::all();
        $player  = player::all();
        return view('player.list', compact('team', 'player'));
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
        $player = new player();
        $player->name = request('name');
        $player->fantamedia = request('fantamedia');
        $player->infortunato = request('infortunato');
        $player->team_id = request('team_id');
        $player->save();
        return redirect('/players');
    }

    /**
     * Display the specified resource.
     */
    public function show(player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(player $player)
    {
        $team  = team::all();
        return view('player.edit', compact('team', 'player'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, player $player)
    {

        $player->name = request('name');
        $player->fantamedia = request('fantamedia');
        $player->infortunato = request('infortunato');
        $player->team_id = request('team_id');
        $player->save();
        return redirect('/players');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(player $player)
    {
        $player->delete();
        return redirect('/players');
    }
}
