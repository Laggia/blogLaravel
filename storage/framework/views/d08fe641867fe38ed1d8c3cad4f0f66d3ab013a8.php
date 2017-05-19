<?php $__env->startSection('title','Listado de categorias'); ?>

<?php $__env->startSection('content'); ?>
	<a href="<?php echo e(route('categories.create')); ?>" class="btn btn-info">Registrar nueva categoria</a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($category->id); ?></td>
					<td><?php echo e($category->name); ?></td>
					<td>
						<a href="<?php echo e(route('categories.edit', $category)); ?>" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
						<a href="<?php echo e(route('categories.destroy', $category)); ?>" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar la categoria <?php echo e($category->name); ?>?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
		</tbody>
	</table>
	<div class="text-center">
		<?php echo $categories->render(); ?>

	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/template/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>