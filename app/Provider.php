<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = "providers";

    protected $fillable = [
        'user_id', 'type_id', 'tradename', 'company_name', 'rfc', 'services', 'events',
    ];
    public function User()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function Provider_Type()
    {
        return $this->hasOne('App\Provider_Type','id','type_id');
    }
    public function Services_Categories()
    {
        return $this->hasMany('App\ServiceCategory','id','services');
    }
    public function Events_Categories()
    {
        return $this->hasMany('App\ServiceCategory','id','events');
    }

    public function email()
    {
        return $this->User->email;
    }

    public function name()
    {
        return $this->User->name;
    }
}
