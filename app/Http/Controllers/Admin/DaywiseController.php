<?php

namespace App\Http\Controllers\Admin;

use App\Daywise;
use App\Http\Controllers\Controller;
use App\User;
use App\Workout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DaywiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daywise = Daywise::all();
        return view('backend.pages.admin.daywise.index',compact('daywise'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $data = Workout::all();
        return view('backend.pages.admin.daywise.create',compact('users','data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $daywise = Daywise::create([
            'user_id' => $request->user_id,
            'mon' => json_encode($request->mon),
            'tue' => json_encode($request->tue),
            'wed' => json_encode($request->wed),
            'thu' => json_encode($request->thu),
            'fri' => json_encode($request->fri),
            'sat' => json_encode($request->sat),
        ]);
        return redirect()->route('daywise.index')->with('success', "Daywise Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $daywise
     * @return \Illuminate\Http\Response
     */
    public function edit(Daywise $daywise)
    {
        $users = User::all();
        $data = Workout::all();
        return view('backend.pages.admin.daywise.edit',compact('daywise','users','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $daywise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daywise $daywise)
    {
        $daywise->update([
            'user_id' => $request->user_id,
            'mon' => json_encode($request->mon),
            'tue' => json_encode($request->tue),
            'wed' => json_encode($request->wed),
            'thu' => json_encode($request->thu),
            'fri' => json_encode($request->fri),
            'sat' => json_encode($request->sat),
        ]);
        return redirect()->route('daywise.index')->with('success', "Daywise Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $daywise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daywise $daywise)
    {
        $daywise->delete();
        return redirect()->route('daywise.index')->with('success', "Daywise Deleted Successfully");

    }
}
