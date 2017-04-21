<?php

namespace App\Http\Controllers;
use App\Modelos\Material as material; 
use Illuminate\Http\Request;

class MaterialController extends Controller
{
     public function listamat()
    {
       /*Para el titulo de la vista*/
       $titulo = 'Catálogo de Material para Informes';
       /*Para la consulta de la vista*/
       $material=material::select('id_material','material','precio')->get()->toArray(); 
       $material=is_array($material)?$material:array();
       return view('catalogos.material',['material'=>$material,'titulo'=>$titulo]);
    }
}
