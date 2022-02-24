<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'title', 'link', 'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
