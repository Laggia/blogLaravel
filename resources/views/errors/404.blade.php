@extends('admin/template/main')

@section('title', ' ')

@section('content')
	<div class="text-center">
		<h1 class="text-center">Página no encontrada</h1>
		<img class="img-responsive center-block" src="{{ asset('images/error_not_found.jpg') }}" alt="">
		<h2 class="text-center">Parece que el sitio al cual desea acceder no se encuentra disponile</h2>
		<a href="{{ route('front.index') }}">¿Desea volver al inicio?</a>	
	</div>
	
@endsection