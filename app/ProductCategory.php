<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = "products_categories";

    protected $fillable = [
        'description',
    ];

    public function Provider()
    {
        return $this->belongsTo('App\Provider');
    }
}
