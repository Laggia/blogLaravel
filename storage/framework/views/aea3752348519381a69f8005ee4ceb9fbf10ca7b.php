<?php $__env->startSection('title','Editar categoria '.$category->name); ?>

<?php $__env->startSection('content'); ?>
	<?php echo Form::open(['route' => ['categories.update', $category], 'method' => 'put']); ?>

		<div class="form-group">
			<?php echo Form::label('name', 'Nombre'); ?>

			<?php echo Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria', 
			'required']); ?>

		</div>
		<div class="form-group">
			<?php echo Form::submit('Editar', ['class' => 'btn btn-primary']); ?>

		</div>
	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/template/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>