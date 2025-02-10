<?php

namespace App\Http\Controllers;

use App\Models\kid;
use App\Models\gift;

use Illuminate\Http\Request;

class KidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kid = kid::all();
        $gift = gift::all();

        return view('kid.list', compact('kid', 'gift'));
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
        $kid = new kid();
        $kid->name = request('name');
        $kid->age = request('age');
        $kid->address = request('address');
        $kid->gift_id = request('gift_id');
        $kid->save();
        return redirect('/kids');
    }

    /**
     * Display the specified resource.
     */
    public function show(kid $kid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kid $kid)
    {
        $gift = gift::all();

        return view('kid.edit', compact('kid', 'gift'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kid $kid)
    {
        $kid->name = request('name');
        $kid->age = request('age');
        $kid->address = request('address');
        $kid->gift_id = request('gift_id');
        $kid->save();
        return redirect('/kids');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kid $kid)
    {
        $kid->delete();
        return redirect('/kids');
    }
}
