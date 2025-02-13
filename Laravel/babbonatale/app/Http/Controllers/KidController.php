<?php

namespace App\Http\Controllers;

use App\Models\kid;
use Illuminate\Http\Request;

class KidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kid = kid::all();
        return view('kid.list', compact('kid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kid = new kid();
        $kid->name = request('name');
        $kid->good = request('good');
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
        return view('kid.edit', compact('kid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kid $kid)
    {
        $kid->name = request('name');
        $kid->good = request('good');
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
