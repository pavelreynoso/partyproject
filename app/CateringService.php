<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CateringService extends Model
{
    protected $table = "catering_services";

    protected $fillable = [
        'type',
    ];
}
