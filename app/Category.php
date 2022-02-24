<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function setNameAttribute($value){
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function video(){
        return $this->hasMany(Video::class);
    }
}
