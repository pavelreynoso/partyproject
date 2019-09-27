<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stock';

    protected $fillable = [
        'quantity',
        'specific_date',
        'anticipation_time',
        'minimum',
    ];

    public function users()
    {
        $this->belongsToMany('App\User');
    }
}
