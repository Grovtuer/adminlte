<?php

namespace App\Http\Controllers;
use App\Modelos\SueldoBase as sueldo; 
use Illuminate\Http\Request;

class SueldoBaseController extends Controller
{
    public function listasb()
    {
       /*Para el titulo de la vista*/
       $titulo = 'Catálogo de Sueldo Base';
       /*Para la consulta de la vista*/
       $sueldo=sueldo::select('id_sbase','cantidad')->get()->toArray(); 
       $sueldo=is_array($sueldo)?$sueldo:array(); 
       return view('catalogos.sbase',['sueldo'=>$sueldo,'titulo'=>$titulo]);
    }
}
