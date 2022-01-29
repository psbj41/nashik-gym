<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Payment extends Model implements HasMedia
{
    use InteractsWithMedia;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'account_holder_name',
    ];

    //mutators
    protected $appends = ['qrimg'];

    public function getQrimgAttribute()
    {
        return $this->getMedia('qr_img')->first()->getUrl();
    }

}
