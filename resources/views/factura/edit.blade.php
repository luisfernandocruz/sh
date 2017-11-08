@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section("content")
	<div class="container white">
		<h1>Editar Factura</h1>
		<div class="form-group text-right">
			{!!Form::open(['route'=>['factura.destroy', $factura->id], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>"btn btn-outline-danger"])!!}
			{!!Form::close()!!}
		</div>
		<!--formulario-->
		@include('factura.form', ['factura'=>$factura, 'url'=>'/factura/'.$factura->id, 'method' => 'PATCH'])
	</div>
@endsection