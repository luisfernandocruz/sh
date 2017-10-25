@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section('content')
<div class="big-padding text-center blue-grey white-text">
	<h1>Productos</h1>
</div>
<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>Producto</td>
				<td>Precio</td>
				<td>Cantidad</td>
				<td>Tipo Cantidad</td>
				<td>Proveedor</td>
				<td>Categoria</td>
				<td>Acciones</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($producto as $producto)
			<tr>
				
				<td>{{ $producto->nombre}}</td>
				<td>{{ $producto->precio}}</td>
				<td>{{ $producto->cantidad}}</td>
				<td>{{ $producto->tipo_cantidad}}</td>
				<td>{{ $producto->proveedor->nombre}}</td>
				<td>{{ $producto->categoria->nombre}}</td>
				<td>
					<a href="{{url('/producto/'.$producto->id.'/edit')}}">Editar</a>

					@include('producto.delete',['producto'=>$producto])
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<div class="floating">
	<a href="{{url('/producto/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">add</i>
	</a>
</div>
@endsection