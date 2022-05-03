<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Timetable;
use App\User;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timetable = Timetable::all();
        return view('backend.pages.admin.timetable.index',compact('timetable'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('backend.pages.admin.timetable.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\PermissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $timetable = new Timetable();
        $timetable->name = $request->name;
        $timetable->save();

        return redirect()->route('timetable.index')->with('success', "Timetable Created Successfully");
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
     * @param  int  $timetable
     * @return \Illuminate\Http\Response
     */
    public function edit(Timetable $timetable)
    {
        return view('backend.pages.admin.timetable.edit',compact('timetable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\PermissionRequest  $request
     * @param  int  $timetable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timetable $timetable)
    {
        // $timetable->name = $request->name;
        // $timetable->save();

        return redirect()->route('timetable.index')->with('success', "Timetable Updated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $timetable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timetable $timetable)
    {
        // $timetable->delete();
        return redirect()->route('timetable.index')->with('success', "Timetable Deleted Successfully");

    }
}
