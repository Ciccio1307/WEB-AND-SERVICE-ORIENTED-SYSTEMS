<?php

namespace App\Http\Controllers;

use App\Models\brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brand = brand::all();
        return view('brand.list', compact('brand'));
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
        $brand = new brand();
        $brand->name = request('name');
        $brand->employers = request('employers');
        $brand->save();
        return redirect('/brands');
    }

    /**
     * Display the specified resource.
     */
    public function show(brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(brand $brand)
    {
        return view('brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, brand $brand)
    {
        $brand->name = request('name');
        $brand->employers = request('employers');
        $brand->save();
        return redirect('/brands');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(brand $brand)
    {
        $brand->delete();
        return redirect('/brands');
    }
}
