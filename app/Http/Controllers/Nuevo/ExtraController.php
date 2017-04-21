<?php

namespace App\Http\Controllers;
use App\Modelos\Extra as extra; 
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function listaext()
    {
       /*Para el titulo de la vista*/
       $titulo = 'Catálogo de Comisiones Extras';
       /*Para la consulta de la vista*/
       $extra=extra::select('id_extra','nombre','cantidad')->get()->toArray(); 
       $extra=is_array($extra)?$extra:array(); 
       return view('catalogos.extra',['extra'=>$extra,'titulo'=>$titulo]);
    }
}
