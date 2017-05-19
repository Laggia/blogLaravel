<?php $__env->startSection('title', 'Listado de imágenes'); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<img src="/images/articles/<?php echo e($image->name); ?>" class="img-responsive" alt="">
					</div>		
					<div class="panel-footer"><?php echo e($image->article->title); ?></div>		
				</div>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<div class="text-center">
		<?php echo $images->render(); ?>

	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/template/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>