<?php $__env->startSection('title','Listado de tags'); ?>

<?php $__env->startSection('content'); ?>
	<a href="<?php echo e(route('tags.create')); ?>" class="btn btn-info" >Registrar nuevo Tag</a>
	<!--buscador de tags-->
		<?php echo Form::open(['route' => 'tags.index', 'method' => 'get', 'class' => 'navbar-form pull-right']); ?>

			<div class="form-group">
				<div class="input-group">
					<?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar tag...', 'aria-describedby' => 'search']); ?>

					<span class="input-group-addon" id="search">
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</span>
				</div>
			</div>
		<?php echo Form::close(); ?>

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
			<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($tag->id); ?></td>
					<td><?php echo e($tag->name); ?></td>
					<td>
						<a href="<?php echo e(route('tags.edit', $tag->id)); ?>" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a> 
						<a href="<?php echo e(route('tags.destroy', $tag->id)); ?>" onclick="return confirm('¿Seguro que desea eliminar el tag <?php echo e($tag->name); ?>?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	<div class="text-center">
		<?php echo e($tags->render()); ?>

	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/template/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>