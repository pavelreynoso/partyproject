<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicServices extends Model
{
    protected $table = "music_services";

    protected $fillable = [
        'description',
    ];
}
