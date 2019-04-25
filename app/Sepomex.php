<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sepomex extends Model
{
  protected $table = 'sepomex';

  protected $fillable = [
      'id_estado', 'estado', 'id_municipio', 'municipio', 'ciudad', 'zona', 'cp', 'asentamiento', 'tipo'
  ];
}
