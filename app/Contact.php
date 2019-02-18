<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contacts";

    protected $fillable = [
        'provider_id', 'phone', 'cellphone',
    ];
    public function Provider()
    {
        return $this->hasOne('App\Provider', 'id', 'provider_id');
    }
}
