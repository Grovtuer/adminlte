@extends('adminlte::layouts.app') <!--Principal-->

@section('htmlheader_title') <!--Encabezado con el nombre de la vista y el desglose de links-->
	
@endsection


@section('main-content') <!--Principal-->


<div class="right">
    <a class="btn btn-primary" href="altacom" role="button">Nueva Sede</a>
    <br>
    <br>
</div>
<table class="table table-bordered">
                <thead>    
                    <tr class="success">
                            <th>Indicador</th>
                            <th>Localidad</th>
                            <th>Personal</th>
                            <th>Opción</th>
                    </tr>
                </thead>
                <tbody>
					@for($i=0; $i< sizeof($sede); $i++)
					<tr class="info">
						<th>{{$sede[$i]['id_sede']}}</th>
						<th>{{$sede[$i]['localidad']}}</th>
						<th>5</th> <!--Agrupación de cantidad de empleados por estado se ira a un desglose-->
                        <th>&nbsp &nbsp <a class="btn btn-primary" href="#" role="button"><i class="fa fa-times" aria-hidden="true"></i></a>&nbsp &nbsp &nbsp<a class="btn btn-primary" href="#" role="button"><i class="fa fa-cogs" aria-hidden="true"></i></a></th>
					<tr>	
                    @endfor
                </tbody>
</table>

@endsection