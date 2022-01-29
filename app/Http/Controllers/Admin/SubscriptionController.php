<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Package;
use App\Subscription;
use App\Trainer;
use App\User;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptions = Subscription::all();
        return view('backend.pages.admin.subscription.index',compact('subscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $package = Package::all();
        return view('backend.pages.admin.subscription.create',compact(['user','package']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subscription = Subscription::create($request->all());

        return redirect()->route('subscription.index')->with('success', "Subscription added Succesfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscription $subscription)
    {
        $user = User::all();
        $package = Package::all();
        return view('backend.pages.admin.subscription.edit',compact(['subscription','user','package']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscription $subscription)
    {
        $subscription->update($request->all());
        return redirect()->route('subscription.index')->with('success', "Subscription Updated Succesfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        $subscription->delete();
        return redirect()->route('subscription.index')->with('success', "Subscription Deleted Succesfully");
    }

    public function invoice(Subscription $subscription)
    {
        if($subscription->status_sub == 'paid') {
            return view('backend.pages.client.invoice',compact('subscription'));
        }else {
            return 'no page found';
        }
    }
}
