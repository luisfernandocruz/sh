@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section('content')
<div class="big-padding text-center blue-grey white-text">
	<h1>Facturas</h1>
</div>
<a class="btn btn-outline-success" href="{{url('/factura/create')}}" role="button">Agregar</a>

<div class="container">
	<table class="table table-striped">
		<thead>
			<tr>
				<td>Numero de factura</td>
				<td>Numero de venta</td>
				<td>Total</td>
				<td>Acciones</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($factura as $factura)
			<tr>
				
				<td>{{ $factura->id}}</td>
				<td>{{ $factura->venta_id}}</td>
				<td>{{ $factura->total}}</td>
				<td>
					<a type="button" class="btn btn-outline-info" href="{{url('/factura/'.$factura->id.'/edit')}}">Editar</a>

				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection