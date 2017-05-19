<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	
	<title><?php echo $__env->yieldContent('title','default'); ?> | Panel de Administracion </title>
	<link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap/css/bootstrap_journal.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/fullBackgroundImage.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('plugins/chosen/chosen.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('plugins/trumbowyg/ui/trumbowyg.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
</head>
<body>

	<?php if($view_name != 'front-article'): ?> 
	<?php if($view_name != 'front-index'): ?>
		<?php echo $__env->make('admin/template/partials/nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<div class="container">
			<?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	
			<?php echo $__env->make('admin/template/partials/errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>	
		<?php echo $__env->make('admin/template/partials/article', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php endif; ?>	
	<?php endif; ?>

	<?php echo $__env->make('admin/template/partials/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	

	<script src="<?php echo e(asset('plugins/jquery/js/jquery-3.2.1.js')); ?>"></script>
	<script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.js')); ?>"></script>
	<script src="<?php echo e(asset('plugins/chosen/chosen.jquery.js')); ?>"></script>
	<script src="<?php echo e(asset('plugins/trumbowyg/trumbowyg.js')); ?>"></script>
	<script src="<?php echo e(asset('plugins/trumbowyg/langs/es.min.js')); ?>"></script>

	<?php echo $__env->yieldContent('js'); ?>

</body>
</html>