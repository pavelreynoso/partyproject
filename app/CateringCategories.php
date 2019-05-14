<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CateringCategories extends Model
{
    protected $table = "catering_categories";

    protected $fillable = [
        'description',
    ];

    public function Provider()
    {
        return $this->belongsTo('App\Provider');
    }
}
