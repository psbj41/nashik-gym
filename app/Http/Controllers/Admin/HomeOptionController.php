<?php

namespace App\Http\Controllers\Admin;

use App\HomeOption;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HomeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\This;

class HomeOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.admin.homesetting.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomeRequest $request)
    {
        $homes = [
            'slide1_header',
            'slide1_content',
            'slide1_img',
            'slide2_header',
            'slide2_content',
            'slide2_img',
            'slide3_header',
            'slide3_content',
            'slide3_img',
            'welcome1_header',
            'welcome1_content',
            'welcome1_img',
            'welcome2_header',
            'welcome2_content',
            'welcome2_img',
            'welcome3_header',
            'welcome3_content',
            'welcome3_img',
            'bgprogram_img',
            'bgtestimonial_img',
            'schedule_day',
            'bgloginreg_img',
        ];

        $this->saveHomeSettings($request,$homes);

        return redirect()->route('home')->with('success', "Home Settings Changed Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomeOption  $homeOption
     * @return \Illuminate\Http\Response
     */
    public function show(HomeOption $homeOption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeOption  $homeOption
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeOption $homeOption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeOption  $homeOption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeOption $homeOption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeOption  $homeOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeOption $homeOption)
    {
        //
    }

    private function saveHomeSettings(Request $request, array $homes)
    {
        foreach($homes as $home_name)
        {
            $homeOption = HomeOption::where('home_name', $home_name)->first();
            $request_home_value = $request->{$home_name};

            if($request_home_value !== null)
            {
                if($request->hasFile($home_name))
                {
                    $file = $request->file($home_name);
                    Storage::disk('own')->put($file->getClientOriginalName(), file_get_contents($file));
                    $homeOption->home_value = $file->getClientOriginalName();
                }else
                {
                    $homeOption->home_value = $request_home_value;
                }
            }
            $homeOption->save();
        }
    }

}
