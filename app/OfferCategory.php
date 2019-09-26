<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferCategory extends Model
{
    protected $table = 'offer_categories';

    public function details()
    {
        $this->belongsToMany('App\ProviderDetails');
    }
}
