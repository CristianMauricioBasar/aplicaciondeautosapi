<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
  public $guarded = [];
  const CREATED_AT = 'creado';
  const UPDATED_AT = 'actualizado';
  protected $casts = [
  'auto_id' => 'integer',
  ];
  use HasFactory;
}
