@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section("content")
	<div class="container white">
		@include('producto.error');
		<h1>Nuevo Producto</h1>
		<!--formulario-->
			{!! Form::open(['url'=> '/producto/'.$producto->id, 'method'=>'POST']) !!}
		<div class="form-group">
			{{Form::text('nombre', $producto->nombre, ['class'=>'form-control', 'placeholder'=>'nombre...'])}}
			{{Form::text('precio', $producto->precio, ['class'=>'form-control', 'placeholder'=>'precio...'])}}
			{{Form::text('cantidad', $producto->cantidad, ['class'=>'form-control', 'placeholder'=>'cantidad...'])}}
			{{Form::select('tipo_cantidad', ['' => 'Seleccione un tipo de cantidad', 'kilogramos' => 'kilogramos', 'gramos' => 'gramos', 'litros' => 'litros', 'mililitros' => 'mililitros', 'piezas' => 'piezas'], null, ['class'=>'form-control'])}}
			{{Form::select('proveedor_id', $proveedores, null, ['class'=>'form-control', 'placeholder'=>'Proveedor...'] )}}
			{{Form::select('categoria_id', $categorias, null, ['class'=>'form-control', 'placeholder'=>'Categoria...'] )}}

		</div>
		<div class="form-group text-right">
			<a href="{{url('/producto')}}">Regresar al listado de productos</a>
			<input type="submit" value="Enviar" class="btn btn-success">
		</div>
			{!! Form::close() !!}
	</div>
@endsection