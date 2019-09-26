<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $table = 'articles_categories';

    protected $fillable = [
        'type',
    ];

    public function providers()
    {
        $this->belongsToMany('App\ProviderDetails');
    }

    public function articles()
    {
        $this->hasMany('App\Product');
    }
}
