<?php

namespace App\Http\Controllers;

use App\SubWorkout;
use App\Workout;
use Illuminate\Http\Request;

class SubWorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subworkout = SubWorkout::all();
        return view('backend.pages.admin.subworkout.index',compact('subworkout'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $workout = Workout::all();
        return view('backend.pages.admin.subworkout.create',compact('workout'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subworkout = SubWorkout::create($request->all());
        return redirect()->route('subworkout.index')->with('success', "SubWorkout Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubWorkout  $subworkout
     * @return \Illuminate\Http\Response
     */
    public function show(SubWorkout $subworkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubWorkout  $subworkout
     * @return \Illuminate\Http\Response
     */
    public function edit(SubWorkout $subworkout)
    {
        return view('backend.pages.admin.subworkout.edit',compact('subworkout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubWorkout  $subworkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubWorkout $subworkout)
    {
        $subworkout->update($request->all());
        return redirect()->route('subworkout.index')->with('success', "SubWorkout Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubWorkout  $subworkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubWorkout $subworkout)
    {
        $subworkout->delete();
        return redirect()->route('subworkout.index')->with('success', "SubWorkout Deleted Successfully");
    }

}
