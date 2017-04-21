@extends('adminlte::layouts.app') <!--Principal-->

@section('htmlheader_title') <!--Encabezado con el nombre de la vista y el desglose de links-->
	
@endsection


@section('main-content') <!--Principal-->

<!-- Este div cuenta con el boton de alta, con el de filtro y con el de busqueda -->
<br>    
<div class="right">
            <a class="btn btn-warning" href="altacom" role="button">Nueva Comisión</a>
</div>

<br>

<div class="col-8">
    <table class="table table-condensed"> <!-- table-bordered -->
                    <thead>    
                        <tr class="success">
                                <!-- <th>Indicador</th> -->
                                <th>Etiqueta</th>
                                <th>Cantidad</th>
                                <th>Opción</th>
                        </tr>
                    </thead>
                    <tbody>
    					@for($i=0; $i< sizeof($comision); $i++)
    					<tr class="info">
    						<!-- <th>{{$comision[$i]['id_comision']}}</th> -->
    						<th>{{$comision[$i]['etiqueta']}}</th>
    						<th>{{$comision[$i]['cantidad']}}</th>
                            <th>
                                &nbsp &nbsp 
                                <a href="eliminarcom/{{$comision[$i]['id_comision']}}" class="btn btn-default"  role="button"><i class="fa fa-times" aria-hidden="true"></i></a>
                                &nbsp &nbsp &nbsp
                                <a href="editarcom/{{$comision[$i]['id_comision']}}" class="btn btn-default"  role="button"><i class="fa fa-cogs" aria-hidden="true"></i></a></th>
    					<tr>	
                        @endfor
                    </tbody>
    </table>
@endsection