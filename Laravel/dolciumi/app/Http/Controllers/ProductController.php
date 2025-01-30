<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\brand;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = product::all();
        $brand = brand::all();

        return view('product.list', compact('product', 'brand'));
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
        $product = new product();
        $product->name = request('name');
        $product->pezzi = request('pezzi');
        $product->peso = request('peso');
        $product->brand_id = request('brand_id');
        $product->save();
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        $brand = brand::all();

        return view('product.edit', compact('product', 'brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $product->name = request('name');
        $product->pezzi = request('pezzi');
        $product->peso = request('peso');
        $product->brand_id = request('brand_id');
        $product->save();
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();
        return redirect('/products');
    }
}
