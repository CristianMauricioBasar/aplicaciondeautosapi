<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index;

Route::post('datos', [index::class, 'datos']);
