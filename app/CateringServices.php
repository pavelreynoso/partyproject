<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CateringServices extends Model
{
    protected $table = "catering_categories";

    protected $fillable = [
        'type',
    ];
}
