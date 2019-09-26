<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\ProviderDetails;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

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

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
    public function provider_details()
    {
        return $this->hasOne('App\ProvidersDetails');
    }

    public function hasAnyRoles($roles)
    {
        return null !== $this->roles()->whereIn('type', $roles)->first();
    }

    public function hasRole($role)
    {
        return null !== $this->roles()->where('type', $role)->first();
    }

    public function articles()
    {
        return $this->hasMany('App\ArticleCategory');
    }
    public function events()
    {
        return $this->hasMany('App\EventCategory');
    }
    public function fullName()
    {
        return $this->name.' '.$this->last_names;
    }

    public function recover()
    {
        $this->history()->restore();
    }

    public $timestamps = false;
}
