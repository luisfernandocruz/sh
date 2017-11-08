@extends('layouts.app')
@extends('layouts.nav')

@section('nav')
@endsection

@section("content")
	<div class="container white">
		<h1>Editar Categoria</h1>
		<div class="form-group text-right">
			{!!Form::open(['route'=>['categoria.destroy', $categoria->id], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>"btn btn-outline-danger"])!!}
			{!!Form::close()!!}
		</div>
		<!--formulario-->
		@include('categoria.form', ['categoria'=>$categoria, 'url'=>'/categoria/'.$categoria->id, 'method' => 'PATCH'])
	</div>
@endsection