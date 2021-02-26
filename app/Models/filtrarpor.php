<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filtrarpor extends Model
{
  public $guarded = [];
  const CREATED_AT = 'creado';
  const UPDATED_AT = 'actualizado';
  use HasFactory;
}
