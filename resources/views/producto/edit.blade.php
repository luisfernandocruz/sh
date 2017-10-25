@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section("content")
	<div class="container white">
		@include('producto.error');
		<h1>Editar Producto</h1>
		<!--formulario-->
			{!! Form::open(['url'=> '/producto/'.$producto->id, 'method'=>'PATCH']) !!}
		<div class="form-group">
			{{Form::text('nombre', $producto->nombre, ['class'=>'form-control', 'placeholder'=>'nombre...'])}}
			{{Form::text('precio', $producto->precio, ['class'=>'form-control', 'placeholder'=>'precio...'])}}
			{{Form::text('cantidad', $producto->cantidad, ['class'=>'form-control', 'placeholder'=>'cantidad...'])}}
			{{Form::select('tipo_cantidad', ['' => 'Seleccione el tipo de cantidad', 'kilogramos', 'gramos', 'litros', 'mililitros', 'piezas'], null, ['class'=>'form-control', 'placeholder'=>'Tipo cantidad...'])}}
			{{Form::select('proveedor_id', $proveedores, $producto->proveedor->id, ['class'=>'form-control', 'placeholder'=>'Proveedor...'] )}}
			{{Form::select('categoria_id', $categorias, $producto->categoria->id, ['class'=>'form-control', 'placeholder'=>'Categoria...'] )}}

		</div>
		<div class="form-group text-right">
			<a href="{{url('/producto')}}">Regresar al listado de productos</a>
			<input type="submit" value="Enviar" class="btn btn-success">
		</div>
			{!! Form::close() !!}

	</div>
@endsection