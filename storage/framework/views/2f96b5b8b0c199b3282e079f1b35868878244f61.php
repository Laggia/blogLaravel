<?php echo $__env->make('admin/template/partials/nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
		<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="text-center"><?php echo e(trans('app.title_last_articles')); ?></h3>		
					<h4><?php echo e(trans('app.test', ['name' => 'Felipe', 'company' => 'Laggia LTDA'])); ?></h4>
				</div>
			</div>
			<div class="row">
				<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<a href="<?php echo e(route('front.view.article', $article->slug)); ?>" class="thumbnail">
							<?php $__currentLoopData = $article->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<img class="img-responsive img-article" src="<?php echo e(asset('images/articles/'.$image->name)); ?>" alt="">
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</a>
							<a href="<?php echo e(route('front.view.article', $article->slug)); ?>">
								<h3 class="text-center"><?php echo e($article->title); ?></h3>
							</a>	
							<hr>
							<i class="fa fa-folder-open-o"></i> <a href="<?php echo e(route('front.search.category', $article->category->name)); ?>"><?php echo e($article->category->name); ?></a>
							<div class="pull-right">
								<i class="fa fa-clock-o"></i> <?php echo e($article->created_at->diffForHumans()); ?>

							</div>
						</div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
			</div>
			<div class="text-center">
				<?php echo $articles->render(); ?>

			</div>
		</div>
		<div class="col-md-4 aside">
			<?php echo $__env->make('front/partials/aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
	</div>	
</div>
<?php echo $__env->make('admin/template/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>