<?php

namespace App\Http\Controllers;

use App\Models\gift;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gift = gift::all();
        return view('gift.list', compact('gift'));
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
        $gift = new gift();
        $gift->name = request('name');
        $gift->brand = request('brand');
        $gift->save();
        return redirect('/gifts');
    }

    /**
     * Display the specified resource.
     */
    public function show(gift $gift) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gift $gift)
    {
        return view('gift.edit', compact('gift'));
    }


    public function update(Request $request, gift $gift)
    {
        $gift->name = request('name');
        $gift->brand = request('brand');
        $gift->save();
        return redirect('/gifts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gift $gift)
    {
        $gift->delete();
        return redirect('/gifts');
    }
}
