<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Program extends Model implements HasMedia
{
    use InteractsWithMedia;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'about', 'year', 'trainers', 'clients',
    ];

    public function setNameAttribute($value){
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    //mutators
    protected $appends = ['frontpimg', 'backpimg'];

    public function getFrontpimgAttribute()
    {
        return $this->getMedia('front_program_image')->first()->getUrl();
    }

    public function getBackpimgAttribute()
    {
        return $this->getMedia('back_program_image')->first()->getUrl();
    }
}
