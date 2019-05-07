<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicCategories extends Model
{
    protected $table = "music_categories";

    protected $fillable = [
        'description',
    ];
}
