<?php $__env->startSection('title','Editar articulo '.$article->title ); ?>

<?php $__env->startSection('content'); ?>
	<?php echo Form::open(['route' => ['articles.update', $article], 'method' => 'put']); ?>

		<div class="form-group">
			<?php echo Form::label('title','Titulo'); ?>

			<?php echo Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Título del articulo...', 'required']); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('category_id', 'Categoría'); ?>

			<?php echo Form::select('category_id', $categories, $article->category->id, ['class' => 'form-control select-category','placeholder' => '' ,'required']); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('content', 'Contenido'); ?>

			<?php echo Form::textarea('content', $article->content, ['class' => 'form-control textarea-content']); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('tags', 'Tags'); ?>

			<?php echo Form::select('tags[]', $tags, $my_tags, ['class' => 'form-control select-tag', 'multiple', 'required']); ?>

		</div>

		<div class="form-group">
			<?php echo Form::submit('Editar artículo', ['class' => 'btn btn-primary']); ?>

		</div>
	<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/template/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>