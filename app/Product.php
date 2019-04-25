<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        'provider_id', 'name', 'category_id', 'description', 'price', 'preparation_time',
        'discount', 'quantity_available',
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
}
