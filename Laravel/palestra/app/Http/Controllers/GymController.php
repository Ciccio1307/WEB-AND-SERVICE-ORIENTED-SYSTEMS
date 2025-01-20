<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use App\Http\Requests\StoreGymRequest;
use App\Http\Requests\UpdateGymRequest;

class GymController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gym = Gym::all();
        return view('index',compact('gym'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGymRequest $request)
    {
        $gym = new Gym();
        $gym->name = request('name');
        $gym->subscriber = request('subscriber');
        $gym->machine = request('machine');
        $gym ->save();
        return redirect('/gyms');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gym $gym)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gym $gym)
    {
        return view('edit', compact('gym'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGymRequest $request, Gym $gym)
    {
        $gym->name = request('name');
        $gym->subscriber = request('subscriber');
        $gym->machine = request('machine');
        $gym ->save();
        return redirect('/gyms');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gym $gym)
    {
       $gym -> delete();
       return redirect('/gyms');

    }
}
