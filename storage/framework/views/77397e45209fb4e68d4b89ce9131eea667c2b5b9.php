<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title><?php echo e($article->title); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/general.css')); ?>">
</head>
<body>
	Hola Laggia!
	<br><br>
	<h1><?php echo e($article->title); ?></h1>
	<hr>
	<?php echo e($article->content); ?>

	<hr>
	<?php echo e($article->user->name); ?> | <?php echo e($article->category->name); ?>


	<?php $__currentLoopData = $article->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($tag -> name); ?>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>


	