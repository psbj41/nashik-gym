<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daywise extends Model
{
    protected $fillable = [
        'user_id',
        'mon',
        'tue',
        'wed',
        'thu',
        'fri',
        'sat',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
