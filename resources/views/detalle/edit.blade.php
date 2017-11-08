@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section("content")
	<div class="container white">
		<h1>Editar Detalle de venta</h1>
		<div class="form-group text-right">
			{!!Form::open(['route'=>['detalle.destroy', $detalle->id], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>"btn btn-outline-danger"])!!}
			{!!Form::close()!!}
		</div>
		<!--formulario-->
		@include('detalle.form', ['detalle'=>$detalle, 'url'=>'/detalle/'.$detalle->id, 'method' => 'PATCH'])
	</div>
@endsection