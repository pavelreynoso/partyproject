<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicService extends Model
{
    protected $table = "music_services";

    protected $fillable = [
        'description',
    ];
}
