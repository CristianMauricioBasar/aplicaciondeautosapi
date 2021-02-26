<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\filtrarpor;
use App\Models\ordenarpor;
use App\Models\auto;

class index extends Controller
{
  public function datos(request $post){
    $listacategorias = categoria::select('nombre')->get();
    $listafiltrarpor = filtrarpor::select('nombre')->get();
    $listaordenarpor = ordenarpor::select('nombre')->get();
    $listadeautos = auto::select('titulo', 'modelo', 'precio', 'imagen', 'descripcion', 'id')
    ->with('datosslider', 'datosimagenes')->orderBy('actualizado', 'DESC')->get();

    $datos = compact('listacategorias', 'listafiltrarpor', 'listaordenarpor', 'listadeautos');
    return $datos;
  }
}
