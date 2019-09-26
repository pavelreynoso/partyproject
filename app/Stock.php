<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stock';

    protected $fillable = [
        'quantity',
        'specific_time',
        'anticipation_time',
        'minimum',
    ];

    public function users()
    {
        $this->belongsToMany('App\User');
    }
}
