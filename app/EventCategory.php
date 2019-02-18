<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    protected $table = "events_categories";

    protected $fillable = [
        'description',
    ];

    public function Provider()
    {
        return $this->belongsTo('App\Provider');
    }
}
