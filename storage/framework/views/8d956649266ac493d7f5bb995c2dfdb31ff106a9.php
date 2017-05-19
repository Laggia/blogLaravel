<?php $__env->startSection('title', 'Listado de artículos'); ?>

<?php $__env->startSection('content'); ?>
	<a href="<?php echo e(route('articles.create')); ?>" class="btn btn-info">Registrar nuevo artículo</a>
	<!--buscador de artículos-->
		<?php echo Form::open(['route' => 'articles.index', 'method' => 'get', 'class' => 'navbar-form pull-right']); ?>

			<div class="form-group">
				<div class="input-group">
					<?php echo Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar artículo...', 'aria-describedby' => 'search']); ?>

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
				<th>Títulos</th>
				<th>Categorias</th>
				<th>User</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($article->id); ?></td>
					<td><?php echo e($article->title); ?></td>
					<td><?php echo e($article->category->name); ?></td>
					<td><?php echo e($article->user->name); ?></td>
					<td>
						<a href="<?php echo e(route('articles.edit', $article->id)); ?>" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
						<a href="<?php echo e(route('articles.destroy', $article->id)); ?>" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar el artículo <?php echo e($article->title); ?>?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	<div class="text-center">
		<?php echo $articles->render(); ?> 
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/template/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>