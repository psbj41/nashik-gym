<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Subscription extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'trainer_id',
        'package_id',
        'payment_price',
        'advance',
        'balance',
        'start',
        'end',
        'status_sub',
        'transaction',
        'option',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    protected $appends =['remaining_days'];

    public function getRemainingDaysAttribute()
    {
        if ($this->end) {
            $remaining_days = Carbon::now()->diffInDays(Carbon::parse($this->end));
        } else {
            $remaining_days = 0;
        }
        return $remaining_days;
    }


}
