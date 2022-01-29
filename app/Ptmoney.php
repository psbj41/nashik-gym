<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ptmoney extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pt_total',
        'pt_advance',
        'pt_balance',
    ];
}
