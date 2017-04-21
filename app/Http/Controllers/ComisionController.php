<?php

namespace App\Http\Controllers\Catalogos;
use App\Http\Controllers\Controller;
use App\Modelos\Catalogos\Comisiones as comision; 
use Illuminate\Http\Request;

class ComisionController extends Controller
{
    
    public function index()
    {
        /*Para el titulo de la vista*/
       $titulo = 'Catálogo de Comisión';
       /*Para la consulta de la vista*/
       $comision=comision::select('id_comision','etiqueta','cantidad')->get()->toArray(); 
       $comision=is_array($comision)?$comision:array(); 
       return view('catalogos.comision',['comision'=>$comision,'titulo'=>$titulo]);
    }

    public function create()
    {
       $titulo = 'Nueva Comisión';
       return view('catalogos.comisionf', ['titulo'=>$titulo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }  
}
 