<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Package;
use App\User;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $roles;
    public function __construct()
    {
        $this->roles = Role::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('backend.pages.admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $package = Package::all();
        return view('backend.pages.admin.users.create',compact('package'))->with('roles', $this->roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = User::create($request->all());
        $user->assignRole($request->role_id);
        $user->addMedia($request->avatar)->toMediaCollection('user_avatar');
        return redirect()->route('user.index')->with('success', $user->name." Successfully Registered");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $package = Package::all();
        return view('backend.pages.admin.users.edit',compact(['user','package']))->with('roles', $this->roles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        $user->syncRoles([$request->role_id]);
        return redirect()->route('user.index')->with('success', $user->name." Successfully Edited");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success'," Successfully Deleted");
    }

    public function profile(User $user)
    {
        return view('backend.pages.admin.users.profile',compact('user'));
    }

}
