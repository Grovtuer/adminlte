<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*Controladores de Comision*/

/*---------------------------------------------------------------------------*/
Route::get ('catalogos/comision','Catalogos\ComisionController@index'); 	 	/*Mostrar la tabla*/
Route::get ('catalogos/altacom','Catalogos\ComisionController@crear'); 		 	/*Manda al formulario de alta de comision*/
Route::post('catalogos/guardarcom','Catalogos\ComisionController@guardar');	 	/*POST del formulario para guardar*/
Route::post('eliminarcom/{id}','Catalogos\ComisionController@eliminar'); 			/*Desactivar el estatus solamente*/
Route::post('catalogos/editarcom/{{$id}}','Catalogos\ComisionController@editar');	/*POST del formulario para guardar*/
/*---------------------------------------------------------------------------*/


/*Routes de Sede*/	
Route::get('sede', 'SedeController@listased');

/*Routes de Sueldo Base*/
Route::get('sueldobase','SueldoBaseController@listasb');

/*Routes de Extra*/
Route::get('extra','ExtraController@listaext');

/*Routes de Extra*/
Route::get('puestos','PuestosController@listapue');

/*Routes de Material*/
Route::get('material','MaterialController@listamat');

/*Routes de Material*/
Route::get('mercado','MercadoController@listamer');



/*---------------------------------------------------------------------------*/
Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});