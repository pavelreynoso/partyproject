<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    protected $table = "events_categories";

    protected $fillable = [
        'type',
    ];

    public function Provider()
    {
        return $this->belongsTo('App\Provider');
    }
}
