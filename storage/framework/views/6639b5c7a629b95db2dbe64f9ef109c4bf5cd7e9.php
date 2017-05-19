<?php $__env->startSection('title', ' '); ?>

<?php $__env->startSection('content'); ?>
	<div class="text-center">
		<h1 class="text-center">Página no encontrada</h1>
		<img class="img-responsive center-block" src="<?php echo e(asset('images/error_not_found.jpg')); ?>" alt="">
		<h2 class="text-center">Parece que el sitio al cual desea acceder no se encuentra disponile</h2>
		<a href="<?php echo e(route('front.index')); ?>">¿Desea volver al inicio?</a>	
	</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/template/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>