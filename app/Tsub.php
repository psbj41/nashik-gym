<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Tsub extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'trainer_id',
        'price',
        'advance',
        'balance',
        'start',
        'end',
        'status_tsub',
        'txn',
        'paid_option',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }

    protected $appends =['tsub_days'];

    public function getTsubDaysAttribute()
    {
        if ($this->end) {
            $tsub_days = Carbon::now()->diffInDays(Carbon::parse($this->end));
        } else {
            $tsub_days = 0;
        }
        return $tsub_days;
    }

}
