<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $table = "services_categories";

    protected $fillable = [
        'description',
    ];

    public function Provider()
    {
        return $this->belongsTo('App\Provider');
    }
}
