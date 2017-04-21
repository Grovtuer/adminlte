<?php

namespace App\Http\Controllers;
use App\Modelos\Sedes as sede; 
use Illuminate\Http\Request;

class SedeController extends Controller
{
     public function listased()
    {
       /*Para el titulo de la vista*/
       $titulo = 'Catálogo de Sede';
       /*Para la consulta de la vista*/
       $sede=sede::select('id_sede','localidad')->get()->toArray(); 
       $sede=is_array($sede)?$sede:array();
       return view('catalogos.sede',['sede'=>$sede,'titulo'=>$titulo]);
    }
}
