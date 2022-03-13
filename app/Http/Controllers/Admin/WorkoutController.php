<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Workout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workouts = Workout::all();
        return view('backend.pages.admin.workout.index',compact('workouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.admin.workout.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $workout = Workout::create($request->only('name'));
        return redirect()->route('workout.index')->with('success', "Workout Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function show(Workout $workout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function edit(Workout $workout)
    {
        return view('backend.pages.admin.workout.edit',compact('workout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workout $workout)
    {
        $workout->update($request->only('name'));
        return redirect()->route('workout.index')->with('success', "Workout Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workout $workout)
    {
        $workout->delete();
        return redirect()->route('workout.index')->with('success', "Workout Deleted Successfully");
    }

    public function assignView()
    {
        $workouts = User::all();
        return view('backend.pages.admin.workout.workout-index',compact(['workouts']));
    }

    public function assign()
    {
        $workouts = Workout::all();
        $user = User::all();
        return view('backend.pages.admin.workout.assign',compact(['workouts','user']));
    }

    public function assignStore(Request $request){

        $user = $request->user_id;

        $workout = $request->workout_id;


        $user = \App\User::with('workouts')->where('id',"=",$user)->first();
        $user->workouts()->detach();
        $user->workouts()->attach($workout);

        return redirect()->route('assign.workout.index')->with('success', "Workout Assign to User Successfully");
    }

    public function assignMyView(User $user)
    {
        $workouts = User::where('id',"=",$user->id)->get();
        // Log::info($workouts);
        return view('backend.pages.admin.workout.myw',compact(['workouts']));
    }
}
