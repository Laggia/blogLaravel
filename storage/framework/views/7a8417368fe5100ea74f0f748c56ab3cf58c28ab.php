<?php $__env->startSection('title','Agregar articulo'); ?>

<?php $__env->startSection('content'); ?>
	<?php echo Form::open(['route' => 'articles.store', 'method' => 'post', 'files' => true]); ?>

		<div class="form-group">
			<?php echo Form::label('title','Titulo'); ?>

			<?php echo Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título del articulo...', 'required']); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('category_id', 'Categoría'); ?>

			<?php echo Form::select('category_id', $categories, null, ['class' => 'form-control select-category','placeholder' => '' ,'required']); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('content', 'Contenido'); ?>

			<?php echo Form::textarea('content', null, ['class' => 'form-control textarea-content']); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('tags', 'Tags'); ?>

			<?php echo Form::select('tags[]', $tags, null, ['class' => 'form-control select-tag', 'multiple', 'required']); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('image', 'Imagen'); ?>

			<?php echo Form::file('image'); ?>			
		</div>
		<div class="form-group">
			<?php echo Form::submit('Agregar artículo', ['class' => 'btn btn-primary']); ?>

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