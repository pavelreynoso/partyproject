<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = "providers";

    protected $fillable = [
        'user_id', 'type_id', 'tradename', 'company_name', 'rfc', 'articles', 'events', 'cateringcategories'
    ];
    public function User()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function Provider_Type()
    {
        return $this->hasOne('App\Provider_Type','id','type_id');
    }
    public function Articles_Categories()
    {
        return $this->hasMany('App\ArticleCategory','id','articles');
    }
    public function Events_Categories()
    {
        return $this->hasMany('App\EventCategory','id','events');
    }
    public function Catering_Categories()
    {
        return $this->hasMany('App\CateringCategory','id','cateringcategories');
    }

    public function email()
    {
        return $this->User->email;
    }

    public function name()
    {
        return $this->User->name;
    }
}
