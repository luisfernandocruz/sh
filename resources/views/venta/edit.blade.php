@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section("content")
	<div class="container white">
		<h1>Editar Venta</h1>
		<div class="form-group text-right">
			{!!Form::open(['route'=>['venta.destroy', $venta->id], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>"btn btn-outline-danger"])!!}
			{!!Form::close()!!}
		</div>
		<!--formulario-->
		@include('venta.form', ['venta'=>$venta, 'url'=>'/venta/'.$venta->id, 'method' => 'PATCH'])
	</div>
@endsection