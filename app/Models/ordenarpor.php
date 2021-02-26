<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordenarpor extends Model
{
  public $guarded = [];
  const CREATED_AT = 'creado';
  const UPDATED_AT = 'actualizado';
  use HasFactory;
}
