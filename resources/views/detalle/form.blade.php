{!! Form::open(['url'=> $url, 'method'=>$method]) !!}
	<div class="form-group">
		{{Form::select('venta_id', $ventas, null, ['class'=>'form-control', 'placeholder'=>'numero de venta...'])}}
		    @if ($errors->has('venta_id'))
	            <small class="text-danger">
		            <strong>{{ $errors->first('venta_id') }}</strong>
	            </small>
	        @endif
		{{Form::select('factura_id', $facturas, null, ['class'=>'form-control', 'placeholder'=>'numero de factura...'])}}
			@if ($errors->has('factura_id'))
	            <small class="text-danger">
		            <strong>{{ $errors->first('factura_id') }}</strong>
	            </small>
	        @endif
		{{Form::Select('producto_id', $productos, null, ['class'=>'form-control', 'placeholder'=>'producto...'])}}
			@if ($errors->has('producto_id'))
	            <small class="text-danger">
		            <strong>{{ $errors->first('producto_id') }}</strong>
	            </small>
	        @endif
	<div class="form-group text-right">
		<a href="{{url('/detalle')}}">Regresar al listado de detalles de ventas</a>
		<input type="submit" value="Enviar" class="btn btn-outline-success">
	</div>
{!! Form::close() !!} 