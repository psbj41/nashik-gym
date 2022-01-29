<?php

namespace App\Providers;

use App\Category;
use App\Contact;
use App\Package;
use App\Post;
use App\Program;
use App\Schedule;
use App\Subscription;
use App\Testimonial;
use App\Trainer;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //global category
        View::share('categories', Category::all());

        //latest post for sidebar
        $latestPost = Post::latest()->take(3)->get();
        View::share('latestPost', $latestPost);

        //Footer latest Blog
        $footerBlog = Post::latest()->take(2)->get();
        View::share('footerBlog', $footerBlog);

        //Home latest Blog
        $homeBlog = Post::latest()->take(4)->get();
        View::share('homeBlog', $homeBlog);

        $enquiryCount = Contact::all()->count();
        View::share('enquiryCount', $enquiryCount);

        //testimonial
        $testimonial = Testimonial::all();
        View::share('testimonial', $testimonial);

        //schedule
        $schedule = Schedule::all();
        View::share('schedule', $schedule);

        //Package
        $package = Package::all();
        View::share('package', $package);

        //Program
        $program = Program::all();
        View::share('program', $program);

        //Trainer Home
        $trainers = Trainer::latest()->take(4)->get();
        View::share('trainers', $trainers);

        //trainer page
        $trainer = Trainer::all();
        View::share('trainer', $trainer);

        //about counter trainer
        $trainerCount = Trainer::all()->count();
        View::share('trainerCount', $trainerCount);

        //about counter Clients
        $userCount = User::all()->count();
        View::share('userCount', $userCount);

        //notification for unpaid clients and less than clients
        $notifiall = Subscription::all();
        View::share('notifiall', $notifiall);

        //notification Count for status
        $notifisubCount = Subscription::where('status_sub', 'unpaid')->count();
        View::share('notifisubCount', $notifisubCount);

        //notification for birthday
        $bithdaylist = User::whereDate('dob','>=', now())
        ->whereDate( 'dob', '<=', now()->addDays(7))
        ->get();
        View::share('bithdaylist', $bithdaylist);

        //notification Count for birthday
        $birthdayCount = User::whereDate('dob','>=', now())
        ->whereDate( 'dob', '<=', now()->addDays(7))
        ->count();
        View::share('birthdayCount', $birthdayCount);

        //Total Balance money
        $totalMoney = DB::table('subscriptions')->where('payment_price', '!=', "")->sum('payment_price');
        View::share('totalMoney', $totalMoney);

        //Total Balance money
        $totaladvance = DB::table('subscriptions')->where('advance', '!=', "")->sum('advance');
        View::share('totaladvance', $totaladvance);

        //Total Balance money
        $totalbalance = DB::table('subscriptions')->where('balance', '!=', "")->sum('balance');
        View::share('totalbalance', $totalbalance);

        //Total Balance money
        $totalRMoney = DB::table('moneytables')->where('paid_amt', '!=', "")->sum('paid_amt');
        View::share('totalRMoney', $totalRMoney);

        //Total Balance money
        $totalRadvance = DB::table('moneytables')->where('advance', '!=', "")->sum('advance');
        View::share('totalRadvance', $totalRadvance);

        //Total Balance money
        $totalRbalance = DB::table('moneytables')->where('balance', '!=', "")->sum('balance');
        View::share('totalRbalance', $totalRbalance);

        //Total Balance money
        $totalPtMoney = DB::table('tsubs')->where('price', '!=', "")->sum('price');
        View::share('totalPtMoney', $totalPtMoney);

        //Total Balance money
        $totalPtadvance = DB::table('tsubs')->where('advance', '!=', "")->sum('advance');
        View::share('totalPtadvance', $totalPtadvance);

        //Total Balance money
        $totalPtbalance = DB::table('tsubs')->where('balance', '!=', "")->sum('balance');
        View::share('totalPtbalance', $totalPtbalance);

        //Total Balance money
        $totalPtRMoney = DB::table('ptmoneys')->where('pt_total', '!=', "")->sum('pt_total');
        View::share('totalPtRMoney', $totalPtRMoney);

        //Total Balance money
        $totalPtRadvance = DB::table('ptmoneys')->where('pt_advance', '!=', "")->sum('pt_advance');
        View::share('totalPtRadvance', $totalPtRadvance);

        //Total Balance money
        $totalPtRbalance = DB::table('ptmoneys')->where('pt_balance', '!=', "")->sum('pt_balance');
        View::share('totalPtRbalance', $totalPtRbalance);


    }
}
