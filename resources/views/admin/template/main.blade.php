<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>@yield('title','default') | Panel de Administracion </title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap_journal.css') }}">
	<link rel="stylesheet" href="{{ asset('css/fullBackgroundImage.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
</head>
<body>

	@if ($view_name != 'front-article') 
	@if ($view_name != 'front-index')
		@include('admin/template/partials/nav')

		<div class="container">
			@include('flash::message')	
			@include('admin/template/partials/errors')
		</div>	
		@include('admin/template/partials/article')
	@endif	
	@endif

	@include('admin/template/partials/footer')	

	<script src="{{ asset('plugins/jquery/js/jquery-3.2.1.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	<script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
	<script src="{{ asset('plugins/trumbowyg/trumbowyg.js') }}"></script>
	<script src="{{ asset('plugins/trumbowyg/langs/es.min.js') }}"></script>

	@yield('js')

</body>
</html>