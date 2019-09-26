<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProviderDetails extends Model
{
    protected $table = 'provider_details';

    protected $casts = [
        'event_type' => 'array',
    ];

    protected $fillable = [
        'company_name',
        'description',
        'offer_type',
        'event_type',
        'article_type',
    ];

    public function user()
    {
        $this->belongsTo('App\User');
    }

    public function events()
    {
        $this->hasMany('App\EventCategory');
    }

    public function articles()
    {
        $this->hasOne('App\ArticlesCategory');
    }
    public function offers()
    {
        $this->hasOne('App\OfferCategory');
    }

    public function hasAnyEvents($events)
    {
        return null !== $this->events()->whereIn('type', $events)->first();
    }

    public function hasEvent($event)
    {
        return null !== $this->events()->where('type', $event)->first();
    }

    public function hasAnyOffers($offer)
    {
        return null !== $this->whereIn('offer_type', $offer)->first();
    }

    public function hasOffer($offer)
    {
        return null !== $this->where('offer_type', $offer)->first();
    }

    public function hasAnyArticles($articles)
    {
        return null !== $this->articles()->whereIn('type', $articles)->first();
    }

    public function hasArticle($article)
    {
        return null !== $this->articles()->where('type', $article)->first();
    }

}
