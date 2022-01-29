<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moneytable extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'paid_amt',
        'advance',
        'balance',
    ];
}
