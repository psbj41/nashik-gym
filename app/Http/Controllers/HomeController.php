<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userCount = User::count();
        $blogCount = Post::count();
        $contactCount = Contact::count();
        return view('home',compact(['userCount','blogCount','contactCount']));
    }

}
