<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        'user_id',
        'name',
        'category_id',
        'description',
        'portrait',
        'images',
        'video',
        'compliance',
        'price',
    ];
    public function user()
    {
        return $this->belongsTo('App\User', 'id', 'user_id');
    }

    public function articleCategory()
    {
        return $this->belongsToMany('App\ArticleCategory','id','category_id');
    }

    public function hasAnyArticles($arts)
    {
        return null !== $this->articleCategory()->whereIn('type', $arts)->first();
    }

    public function hasArticle($art)
    {
        return null !== $this->article()->where('type', $art)->first();
    }
}
