<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Testimonial extends Model implements HasMedia
{
    use InteractsWithMedia;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type', 'content'
    ];

    //mutators
    protected $appends = ['testimg'];

    public function getTestimgAttribute()
    {
        return $this->getMedia('testimonial_img')->first()->getUrl();
    }
}
