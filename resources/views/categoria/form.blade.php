{!! Form::open(['url'=> $url, 'method'=>$method]) !!}
	<div class="form-group">
		{{Form::text('nombre', $categoria->nombre, ['class'=>'form-control', 'placeholder'=>'nombre...'])}}
			@if ($errors->has('nombre'))
	            <small class="text-danger">
		            <strong>{{ $errors->first('nombre') }}</strong>
	            </small>
	        @endif
	</div>
	<div class="form-group text-right">
		<a href="{{url('/categoria')}}">Regresar al listado de categorias</a>
		<input type="submit" value="Enviar" class="btn btn-outline-success">
	</div>
{!! Form::close() !!}