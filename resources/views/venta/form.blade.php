{!! Form::open(['url'=> $url, 'method'=>$method]) !!}
	<div class="form-group">
		{{Form::select('usuario_id', $users, null, ['class'=>'form-control', 'placeholder'=>'Usuario...'] )}}
		@if ($errors->has('usuario_id'))
	            <small class="text-danger">
		            <strong>{{ $errors->first('usuario_id') }}</strong>
	            </small>
	    @endif
	</div>
	<div class="form-group text-right">
		<a href="{{url('/venta')}}">Regresar al listado de categorias</a>
		<input type="submit" value="Enviar" class="btn btn-outline-success">
	</div>
{!! Form::close() !!}