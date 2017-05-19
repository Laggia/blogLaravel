<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><?php echo e(trans('app.title_categories')); ?></h3>
	</div>
	<div class="panel-body">
		<ul class="list-group">
			<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li class="list-group-item">
					<span class="badge"><?php echo e($category->articles->count()); ?></span>
					<a href="<?php echo e(route('front.search.category', $category->name)); ?>"><?php echo e($category->name); ?></a>
				</li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
	</div>
</div>

<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Tags</h3>
	</div>
	<div class="panel-body">
		<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<span class="label">
				<a href="<?php echo e(route('front.search.tag', $tag->name)); ?>"><?php echo e($tag->name); ?></a>
			</span>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</div>
