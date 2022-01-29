<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Moneytable;
use App\Subscription;
use Illuminate\Http\Request;

class MoneytableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moneytables = Moneytable::all();
        return view('backend.pages.admin.moneytable.index',compact('moneytables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Moneytable  $moneytable
     * @return \Illuminate\Http\Response
     */
    public function show(Moneytable $moneytable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Moneytable  $moneytable
     * @return \Illuminate\Http\Response
     */
    public function edit(Moneytable $moneytable)
    {
        return view('backend.pages.admin.moneytable.edit',compact('moneytable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Moneytable  $moneytable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Moneytable $moneytable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Moneytable  $moneytable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moneytable $moneytable)
    {
        $moneytable->delete();
        return redirect()->route('moneytable.index')->with('success',"Money Value Deleted Successfully");
    }
}
