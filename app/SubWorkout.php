<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubWorkout extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'workout_id',
    ];

    public function workout()
    {
        return $this->belongsTo(Workout::class);
    }
}
