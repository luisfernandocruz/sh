@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section('content')
<div class="big-padding text-center blue-grey white-text">
	<h1>Ventas</h1>
</div>
<a class="btn btn-outline-success" href="{{url('/venta/create')}}" role="button">Agregar</a>
<div class="container">
	<table class="table table-striped">
		<thead>
			<tr>
				<td>Numero de venta</td>
				<td>Usuario</td>
				<td>Acciones</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($venta as $venta)
			<tr>
				<td>{{ $venta->id}}</td>
				<td>{{ $venta->usuario_id}}</td>
				<td>
					<a type="button" class="btn btn-outline-info" href="{{url('/venta/'.$venta->id.'/edit')}}">Editar</a>

				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection