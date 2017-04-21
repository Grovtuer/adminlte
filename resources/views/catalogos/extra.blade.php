@extends('adminlte::layouts.app') <!--Principal-->

@section('htmlheader_title') <!--Encabezado con el nombre de la vista y el desglose de links-->
	
@endsection


@section('main-content') <!--Principal-->


<div class="right">
    <a class="btn btn-primary" href="altacom" role="button">Nuevo Extra</a>
    <br>
    <br>
</div>
<table class="table table-bordered">
                <thead>    
                    <tr class="success">
                            <th>Indicador</th>
                            <th>Nombre</th>
                            <th>Comisión</th>
                            <th>Opción</th>
                    </tr>
                </thead>
                <tbody>
					@for($i=0; $i< sizeof($extra); $i++)
					<tr class="info">
						<th>{{$extra[$i]['id_extra']}}</th>
						<th>{{$extra[$i]['nombre']}}</th>
                        <th>{{$extra[$i]['cantidad']}}</th>
                        <th>&nbsp &nbsp <a class="btn btn-primary" href="#" role="button"><i class="fa fa-times" aria-hidden="true"></i></a>&nbsp &nbsp &nbsp<a class="btn btn-primary" href="#" role="button"><i class="fa fa-cogs" aria-hidden="true"></i></a></th>
					<tr>	
                    @endfor
                </tbody>
</table>

@endsection