<?php

namespace App\Http\Controllers\Frontend;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Program;
use App\Trainer;
use App\Video;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('frontend.pages.index');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function services()
    {
        return view('frontend.pages.services');
    }

    public function trainer()
    {
        return view('frontend.pages.trainer');
    }

    public function store2(Request $request)
    {
        $contact = Contact::create($request->all());
        return redirect()->route('enquiry')->with('success', $contact->name. " Message Sent Successfully");
    }

    public function enquiry()
    {
        return view('frontend.pages.contact');
    }

    public function singleProgram(Program $program)
    {
        return view('frontend.pages.single-program',compact('program'));
    }

    public function singleTrainer(Trainer $trainer)
    {
        return view('frontend.pages.single-trainer',compact('trainer'));
    }

    public function sendSms()
    {
        return view('backend.pages.admin.message.send_sms');
    }

    public function video()
    {
        $videos = Video::latest()->paginate(2);
        return view('frontend.pages.video',compact('videos'));
    }
}
