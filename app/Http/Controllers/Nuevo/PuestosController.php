<?php

namespace App\Http\Controllers;
use App\Modelos\Puestos as puesto; 
use Illuminate\Http\Request;

class PuestosController extends Controller
{
    public function listapue()
    {
       /*Para el titulo de la vista*/
       $titulo = 'Catálogo de Comisión';
       /*Para la consulta de la vista*/
       $puesto=puesto::select('id_puesto','puesto')->get()->toArray(); 
       $puesto=is_array($puesto)?$puesto:array(); 
       return view('catalogos.puestos',['puesto'=>$puesto,'titulo'=>$titulo]);
    }
    
}