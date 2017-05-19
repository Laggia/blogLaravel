<?php $__env->startSection('title', 'Lista de Usuarios'); ?>

<?php $__env->startSection('content'); ?>
	<a href="<?php echo e(route('users.create')); ?>" class="btn btn-info">Registrar nuevo usuario</a><hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Tipo</th>
			<th>Acción</th>
		</thead>
		<tbody>
			<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($user->id); ?></td>
					<td><?php echo e($user->name); ?></td>
					<td><?php echo e($user->email); ?></td>
					<td>
						<?php if($user->type == "admin"): ?>	
							<span class="label label-danger"><?php echo e($user->type); ?></span>
						<?php else: ?>
							<span class="label label-primary"><?php echo e($user->type); ?></span>
						<?php endif; ?>
					</td>
					<td>
						<a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a> 
						<a href="<?php echo e(route('users.destroy', $user->id)); ?>" onclick="return confirm('¿Seguro que desea eliminar al usuario <?php echo e($user->name); ?>?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	<div class="text-center"> 
		<?php echo $users->render(); ?>

	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/template/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>