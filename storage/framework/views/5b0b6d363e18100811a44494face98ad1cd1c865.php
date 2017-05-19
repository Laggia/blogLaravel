<?php $__env->startSection('title','Crear Usuario'); ?>

<?php $__env->startSection('content'); ?>

	<?php echo Form::open(['route' => 'users.store', 'method' => 'POST']); ?>


		<div class="form-group">
			<?php echo Form::label('name','Nombre'); ?>

			<?php echo Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Nombre completo','required']); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('email','Correo Electronico'); ?>

			<?php echo Form::email('email',null,['class' => 'form-control', 'placeholder' => 'example@gmail.com','required']); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('password','Contraseña'); ?>

			<?php echo Form::password('password',['class' => 'form-control', 'placeholder' => '********','required']); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('type', 'Tipo'); ?>

			<?php echo Form::select('type',['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opción...', 'required']); ?>

		</div>
		
		<div class="form-group">
			<?php echo Form::submit('Registrar', ['class' => 'btn btn-primary']); ?>	
		</div>	

	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/template/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>