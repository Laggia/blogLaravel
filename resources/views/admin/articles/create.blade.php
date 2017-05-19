@extends('admin/template/main')

@section('title','Agregar articulo')

@section('content')
	{!! Form::open(['route' => 'articles.store', 'method' => 'post', 'files' => true])!!}
		<div class="form-group">
			{!! Form::label('title','Titulo') !!}
			{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título del articulo...', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('category_id', 'Categoría') !!}
			{!! Form::select('category_id', $categories, null, ['class' => 'form-control select-category','placeholder' => '' ,'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('content', 'Contenido') !!}
			{!! Form::textarea('content', null, ['class' => 'form-control textarea-content']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tags', 'Tags') !!}
			{!! Form::select('tags[]', $tags, null, ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('image', 'Imagen') !!}
			{!! Form::file('image') !!}			
		</div>
		<div class="form-group">
			{!! Form::submit('Agregar artículo', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}

@endsection

@section('js')
	<script>
		$('.select-tag').chosen({
			placeholder_text_multiple: 'Seleccione un máximo de 3 tags',
			max_selected_options: 3,
			search_contains: true,
			no_results_text: 'No se encontraron resultados'
		});

		$('.select-category').chosen({
			no_results_text: 'No se encontraron resultados',
			placeholder_text_single: 'Seleccione una categoría'
		});

		$('.textarea-content').trumbowyg({
			lang: 'es'	
		});
	</script>
@endsection