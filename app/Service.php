<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";

    protected $fillable = [
        'provider_id', 'name', 'category_id', 'description', 'price', 'preparation_time',
        'approval', 'discount', 'quantity_available', 'availability_id',
    ];
    public function Provider()
    {
        return $this->hasOne('App\Provider', 'id', 'provider_id');
    }
    public function Provider_Type()
    {
        return $this->hasOne('App\Provider_Type','id','type_id');
    }
    public function Category()
    {
        return $this->hasOne('App\Provider','services','category_id');
    }
    public function Availability()
    {
        return $this->hasOne('App\Availability','id','availability_id');
    }
}
