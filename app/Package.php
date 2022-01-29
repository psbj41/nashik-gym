<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'price', 'span', 'content',
    ];

    public function subscription()
    {
        return $this->hasMany(Subscription::class);
    }

}
