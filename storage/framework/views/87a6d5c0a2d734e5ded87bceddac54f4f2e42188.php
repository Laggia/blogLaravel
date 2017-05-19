<?php echo $__env->make('admin/template/partials/nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<?php echo e($article->title); ?>

				</div>
				<div class="panel-body">
					<div class="text-justify">
						<?php echo $article->content; ?>

					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Comentarios</h3>
					<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<span><?php echo e($tag->name); ?><span class="glyphicon glyphicon-tags">&nbsp;</span></span>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<div class="panel-body">
					<div class="text-justify">
						<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://bloglaravelprueba.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>	
					</div>
				</div>
			</div>
			
		
			</div>
			<div class="col-md-4">
				<?php echo $__env->make('front/partials/aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
		</div>
	</div>
<?php echo $__env->make('admin/template/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>