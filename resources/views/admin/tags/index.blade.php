@extends('admin/template/main')

@section('title','Listado de tags')

@section('content')
	<a href="{{ route('tags.create') }}" class="btn btn-info" >Registrar nuevo Tag</a>
	<!--buscador de tags-->
		{!! Form::open(['route' => 'tags.index', 'method' => 'get', 'class' => 'navbar-form pull-right']) !!}
			<div class="form-group">
				<div class="input-group">
					{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar tag...', 'aria-describedby' => 'search']) !!}
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
				<th>Nombre</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($tags as $tag)
				<tr>
					<td>{{ $tag->id }}</td>
					<td>{{ $tag->name }}</td>
					<td>
						<a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a> 
						<a href="{{ route('tags.destroy', $tag->id) }}" onclick="return confirm('¿Seguro que desea eliminar el tag {{ $tag->name }}?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{{ $tags->render() }}
	</div>
@endsection