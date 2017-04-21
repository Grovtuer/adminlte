@extends('adminlte::layouts.app') <!--Principal-->

@section('htmlheader_title') <!--Encabezado con el nombre de la vista y el desglose de links-->
	
@endsection


@section('main-content') <!--Principal-->
<br>
<form method="POST" action="{{ url('catalogos/guardarcom') }}" >
    {!! csrf_field() !!}
    <div class="col-xs-6">
		<div class="form-group">
		    <label for="etiqueta">Etiqueta</label>
		    <input name= "etiqueta" type="text" class="form-control" id="etiqueta">
		    <label for="cantidad">Cantidad</label>
		    <input name= "cantidad" type="text" class="form-control" id="cantidad">
		    <br>
            <select name='com_estatus'  id='com_estatus' class="btn btn-default">
            	<optgroup label="Estatus">
                <option value="1" >Activo</option>
                <option value="2" >Desactivado</option>
            </select>
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</div>
</form>

@endsection