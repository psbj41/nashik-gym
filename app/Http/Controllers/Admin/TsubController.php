<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TsubRequest;
use App\Trainer;
use App\Tsub;
use App\User;
use Illuminate\Http\Request;

class TsubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tsubs = Tsub::all();
        return view('backend.pages.admin.trainer.tsub.index',compact('tsubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $trainer = Trainer::all();
        return view('backend.pages.admin.trainer.tsub.create',compact(['user','trainer']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TsubRequest $request)
    {
        $tsub = Tsub::create($request->all());
        return redirect()->route('tsub.index')->with('success', "Trainer Subscription added Succesfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tsub  $tsub
     * @return \Illuminate\Http\Response
     */
    public function show(Tsub $tsub)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tsub  $tsub
     * @return \Illuminate\Http\Response
     */
    public function edit(Tsub $tsub)
    {
        $user = User::all();
        $trainer = Trainer::all();
        return view('backend.pages.admin.trainer.tsub.edit',compact(['user','trainer','tsub']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tsub  $tsub
     * @return \Illuminate\Http\Response
     */
    public function update(TsubRequest $request, Tsub $tsub)
    {
        $tsub->update($request->all());
        return redirect()->route('tsub.index')->with('success', "Trainer Subscription Updated Succesfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tsub  $tsub
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tsub $tsub)
    {
        $tsub->delete();
        return redirect()->route('tsub.index')->with('success', "Trainer Subscription Deleted Succesfully");
    }

    public function invoice(Tsub $tsub)
    {
        if($tsub->status_tsub == 'paid') {
            return view('backend.pages.admin.trainer.tsub.invoice',compact('tsub'));
        }else {
            return 'no page found';
        }
    }
}
