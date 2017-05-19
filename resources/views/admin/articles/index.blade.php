@extends('admin/template/main')

@section('title', 'Listado de artículos')

@section('content')
	<a href="{{ route('articles.create') }}" class="btn btn-info">Registrar nuevo artículo</a>
	<!--buscador de artículos-->
		{!! Form::open(['route' => 'articles.index', 'method' => 'get', 'class' => 'navbar-form pull-right']) !!}
			<div class="form-group">
				<div class="input-group">
					{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar artículo...', 'aria-describedby' => 'search']) !!}
					<span class="input-group-addon" id="search">
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</span>
				</div>
			</div>
		{!! Form::close()!!}
	<!--fin del buscador-->
	<hr>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Títulos</th>
				<th>Categorias</th>
				<th>User</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($articles as $article)
				<tr>
					<td>{{ $article->id }}</td>
					<td>{{ $article->title }}</td>
					<td>{{ $article->category->name }}</td>
					<td>{{ $article->user->name }}</td>
					<td>
						<a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
						<a href="{{ route('articles.destroy', $article->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar el artículo {{ $article->title }}?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $articles->render() !!} 
	</div>
@endsection