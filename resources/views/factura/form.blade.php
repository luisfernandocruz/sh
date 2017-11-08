{!! Form::open(['url'=> $url, 'method'=>$method]) !!}
	<div class="form-group">
		{{Form::select('venta_id', $ventas, null, ['class'=>'form-control', 'placeholder'=>'numero de venta...'])}}
			@if ($errors->has('venta_id'))
	            <small class="text-danger">
		     	   <strong>{{ $errors->first('venta_id') }}</strong>
	            </small>
	        @endif
		{{Form::text('total', $factura->total, ['class'=>'form-control', 'placeholder'=>'total...'])}}
			@if ($errors->has('total'))
	            <small class="text-danger">
		            <strong>{{ $errors->first('total') }}</strong>
	            </small>
	        @endif
	</div>
	<div class="form-group text-right">
		<a href="{{url('/factura')}}">Regresar al listado de productos</a>
		<input type="submit" value="Enviar" class="btn btn-outline-success">
	</div>
{!! Form::close() !!}