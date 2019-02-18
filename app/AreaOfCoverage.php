<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaOfCoverage extends Model
{
    protected $table = "area_coverage";

    protected $fillable = [
        'provider_id', 'city', 'state', 'street', 'location',
    ];
    public function Provider()
    {
        return $this->hasOne('App\User', 'id', 'provider_id');
    }
}
