<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auto extends Model
{
  public $guarded = [];
  const CREATED_AT = 'creado';
  const UPDATED_AT = 'actualizado';
  protected $casts = [
  'modelo' => 'integer',
  'precio' => 'integer',
  ];
  use HasFactory;

  public function datosslider(){
    return $this->hasMany('App\Models\slider', 'auto_id')->orderBy('actualizado', 'DESC');
  }

  public function datosimagenes(){
    return $this->hasMany('App\Models\imagene', 'auto_id')->orderBy('actualizado', 'DESC');
  }
}
