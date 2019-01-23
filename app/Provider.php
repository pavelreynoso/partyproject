<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public function User()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function email()
    {
        return $this->User->email;
    }
}
