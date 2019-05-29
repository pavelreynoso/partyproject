<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CateringOfferType extends Model
{
    protected $table = "catering_offer_types";

    protected $fillable = [
        'type',
    ];
}
