<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\loan;

use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = book::all();
        $loan = loan::all();
        return view('loan.list', compact('loan', 'book'));
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
        $loan = new loan();
        $loan->user_name = request('user_name');
        $loan->email = request('email');
        $loan->loan_date = request('loan_date');
        $loan->return_date = request('return_date');
        $loan->returned = request('returned');
        $loan->book_id = request('book_id');
        $loan->save();
        return redirect('/loans');
    }

    /**
     * Display the specified resource.
     */
    public function show(loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(loan $loan)
    {
        $book = book::all();
        return view('loan.edit', compact('loan', 'book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, loan $loan)
    {
        $loan->user_name = request('user_name');
        $loan->email = request('email');
        $loan->loan_date = request('loan_date');
        $loan->return_date = request('return_date');
        $loan->returned = request('returned');
        $loan->book_id = request('book_id');
        $loan->save();
        return redirect('/loans');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(loan $loan)
    {
        $loan->delete();
        return redirect('/loans');
    }
}
