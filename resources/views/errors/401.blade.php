@extends('admin/template/main')

@section('title', ' ')

@section('content')
	<div class="text-center">
		<h1 class="text-center">Acceso restringido</h1>
		<img class="img-responsive center-block" src="{{ asset('images/error_access.png') }}" alt="">
		<h2 class="text-center">Usted no tiene acceso a esta zona</h2>
		<a href="{{ route('front.index') }}">¿Desea volver al inicio?</a>	
	</div>
	
@endsection