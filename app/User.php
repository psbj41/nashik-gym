<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Spatie\Permission\Traits\HasRoles;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use Notifiable, HasRoles, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'age', 'contact', 'gender', 'package', 'dob'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //mutators
    protected $appends = ['role_id', 'avatar', 'package_id'];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function getRoleIdAttribute()
    {
        return $this->roles[0]->id;
    }

    public function getAvatarAttribute()
    {
        return $this->getMedia('user_avatar')->first()->getUrl();
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function isModerator(array $permission = []) : bool
    {
        return $this->hasAnyRole(['admin', 'trainer']) && $this->hasAnyPermission($permission) ;
    }

    public function subscription()
    {
        return $this->hasMany(Subscription::class);
    }

    public function tsub()
    {
        return $this->hasMany(Tsub::class);
    }

    public function workouts()
    {
        return $this->belongsToMany(Workout::class);
    }
}
