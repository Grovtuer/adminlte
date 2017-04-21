<?php

namespace App\Http\Controllers\Catalogos;
use App\Http\Controllers\Controller;
use App\Modelos\Catalogos\Comisiones as comision; 
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validation;
use \Illuminate\Http\Response;
use DB;



class ComisionController extends Controller
{
     
    public function index() /*Mostrar la tabla principal*/
    {
       
       // $comision=comision::select('id_comision','etiqueta','cantidad')->get()->toArray();
        
       $titulo = 'Catálogo de Comisión';     /*Para el titulo de la vista*/
       $comision = comision::where('estatus',1)->get()->toArray();
       $comision=is_array($comision)?$comision:array(); 
       return view('catalogos.comision',['comision'=>$comision,'titulo'=>$titulo]);
    }


    public function crear() /*Mostrar el formulario*/
    {
       $titulo = 'Nueva Comisión';
       return view('catalogos.comisionf', ['titulo'=>$titulo]);
    }

    public function guardar(Request $request) /*Guardar en la base de datos el nuevo registro*/
    {
        $etiqueta = strtoupper($request->input('etiqueta'));
        $cantidad = $request->input('cantidad');
        $estatus = $request->input('com_estatus');
        $data = array('etiqueta'=>$etiqueta,'cantidad'=>$cantidad,'estatus'=>$estatus);
        DB::table('comision')->insert($data);
        return Redirect::to('catalogos/comision');
    }


    public function leer()
    {
        return $request;   
    }


    public function eliminar()
    {
        
    }  
}
 