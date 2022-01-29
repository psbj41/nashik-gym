<?php


function getSiteOption(string $option_name): ?string
{
    if(str_contains($option_name, "."))
    {
        $option_array = explode(".", $option_name);
        $option = \App\SiteOption::where("option_name", $option_array[0])->first();
        if($option->option_value !== null)
        {
            $option_values = unserialize($option->option_value);
            return $option_values[$option_array[1]];
        }
        else
        {
            return "";
        }
    }
    else
    {
        $option = \App\SiteOption::where("option_name", $option_name)->first();

        if($option == null) return null;

        return $option->option_value;
    }
}

function getRemainingDaysCount(string $remaining_days_count): ?string
{
    $remaining_days_count = \APP\Subscription::all()->count();
    if($remaining_days_count == null) return null;

    return $remaining_days_count;
}


function getSiteLogo(): ?string
{
    return getSiteOptionPhoto("site_logo");
}

function getSiteOptionPhoto(string $photoOf): ?string
{
    $file_name = \App\SiteOption::where("option_name", $photoOf)->first()->option_value;
    if($file_name == null) return null;

    return asset("frontend/logo/".$file_name);
}



function getHomeOption(string $home_name): ?string
{
        return \App\HomeOption::where("home_name", $home_name)->first()->home_value;
}


function getHomeSlide1Img(): ?string
{
    return getHomeOptionImage("slide1_img");
}

function getHomeSlide2Img(): ?string
{
    return getHomeOptionImage("slide2_img");
}

function getHomeSlide3Img(): ?string
{
    return getHomeOptionImage("slide3_img");
}

function getHomeWelcome1Img(): ?string
{
    return getHomeOptionImage("welcome1_img");
}

function getHomeWelcome2Img(): ?string
{
    return getHomeOptionImage("welcome2_img");
}

function getHomeWelcome3Img(): ?string
{
    return getHomeOptionImage("welcome3_img");
}

function getHomeBgProgramImg(): ?string
{
    return getHomeOptionImage("bgprogram_img");
}

function getHomeBgTestimonialImg(): ?string
{
    return getHomeOptionImage("bgtestimonial_img");
}

function getHomeBgLoginregImg(): ?string
{
    return getHomeOptionImage("bgloginreg_img");
}

function getHomeOptionImage(string $imageOf): ?string
{
    $hfile_name = \App\HomeOption::where("home_name", $imageOf)->first()->home_value;

    if ($hfile_name == null) return null;

    return asset("frontend/logo/".$hfile_name);
}
