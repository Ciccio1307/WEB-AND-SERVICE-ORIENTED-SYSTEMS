<?php

namespace App\Http\Controllers;

use App\Models\present;
use App\Models\kid;

use Illuminate\Http\Request;

class PresentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kid = kid::all();
        $present = present::all();

        return view('present.list', compact('present', 'kid'));
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
        $present = new present();
        $present->name = request('name');
        $present->kid_id = request('kid_id');
        $present->save();
        return redirect('/presents');
    }

    /**
     * Display the specified resource.
     */
    public function show(present $present)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(present $present)
    {
        $kid = kid::all();
        return view('present.edit', compact('present', 'kid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, present $present)
    {
        $present->name = request('name');
        $present->kid_id = request('kid_id');
        $present->save();
        return redirect('/presents');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(present $present)
    {
        $present->delete();
        return redirect('/presents');
    }
}
