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
        'email',
        'profile_id',
        'password',
        'address',
        'name',
        'last',
        'phone',
        'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MailResetPasswordNotification($token));
    }

    public function Profile()
    {
        return $this->hasOne('App\Profile', 'id', 'profile_id');
    }

    public function Admin()
    {
        return $this->hasOne('App\Admin', 'user_id', 'id');
    }

    public function Client()
    {
        return $this->hasOne('App\Client', 'user_id', 'id');
    }

    public function Provider()
    {
        return $this->hasOne('App\Provider', 'user_id', 'id');
    }

    public function FullName()
    {
        return $this->name.' '.$this->last;
    }

    public $timestamps = false;
}
