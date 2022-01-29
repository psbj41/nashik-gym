<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Trainer extends Model implements HasMedia
{
    use InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type', 'about', 'fb', 'twi', 'insta', 'yt',
    ];

    public function setNameAttribute($value){
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    //mutators
    protected $appends = ['tpimg', 'tsimg', 'tcertimg'];

    public function getTpimgAttribute()
    {
        return $this->getMedia('trainer_potrate_img')->first()->getUrl();
    }

    public function getTsimgAttribute()
    {
        return $this->getMedia('trainer_square_img')->first()->getUrl();
    }

    public function getTcertimgAttribute()
    {
        return $this->getMedia('trainer_certificate_img')->first()->getUrl();
    }

    public function tsub()
    {
        return $this->hasMany(Tsub::class);
    }

}
