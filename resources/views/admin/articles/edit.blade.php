@extends('admin/template/main')

@section('title','Editar articulo '.$article->title )

@section('content')
	{!! Form::open(['route' => ['articles.update', $article], 'method' => 'put']) !!}
		<div class="form-group">
			{!! Form::label('title','Titulo') !!}
			{!! Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Título del articulo...', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('category_id', 'Categoría') !!}
			{!! Form::select('category_id', $categories, $article->category->id, ['class' => 'form-control select-category','placeholder' => '' ,'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('content', 'Contenido') !!}
			{!! Form::textarea('content', $article->content, ['class' => 'form-control textarea-content']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tags', 'Tags') !!}
			{!! Form::select('tags[]', $tags, $my_tags, ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar artículo', ['class' => 'btn btn-primary']) !!}
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