<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "clients";

    protected $fillable = [
        'user_id', 'phone',
    ];

    public function User()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function email()
    {
        return $this->User->email;
    }

}
