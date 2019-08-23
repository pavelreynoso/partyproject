<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = [
        'description'
    ];

    public function profiles()
    {
        $this->belongsToMany('App\User');
    }

  }
