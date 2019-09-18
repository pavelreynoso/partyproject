<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_names',
        'email',
        'password',
        'date_of_birth'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MailResetPasswordNotification($token));
    }

    public function profiles()
    {
        return $this->belongsToMany('App\Profile');
    }

    public function hasAnyRoles($profiles)
    {
        return null !== $this->profiles()->whereIn('type', $profiles)->first();
    }

    public function hasRole($profile)
    {
        return null !== $this->profiles()->where('type', $profile)->first();
    }

    public function fullName()
    {
        return $this->name.' '.$this->last;
    }

    public $timestamps = false;
}
