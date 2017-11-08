@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section('content')
<div class="big-padding text-center blue-grey white-text">
	<h1>Detalle de ventas</h1>
</div>
<a class="btn btn-outline-success" href="{{url('/detalle/create')}}" role="button">Agregar</a>

<div class="container">
	<table class="table table-striped">
		<thead>
			<tr>
				<td>Numero de venta</td>
				<td>Numero de factura</td>
				<td>Producto</td>
				<td>Acciones</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($detalle as $detalleventa)
			<tr>
				
				<td>{{ $detalleventa->venta_id}}</td>
				<td>{{ $detalleventa->factura_id}}</td>
				<td>{{ $detalleventa->producto_id}}</td>
				<td>
					<a type="button" class="btn btn-outline-info"  href="{{url('/detalle/'.$detalleventa->id.'/edit')}}">Editar</a>
					
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection