<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CateringCategory extends Model
{
    protected $table = "catering_categories";

    protected $fillable = [
        'type',
    ];
}
