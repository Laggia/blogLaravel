@extends('admin/template/main')

@include('admin/template/partials/nav')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel-heading">
					{{ $article->title }}
				</div>
				<div class="panel-body">
					<div class="text-justify">
						{!! $article->content !!}
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Comentarios</h3>
					@foreach ($tags as $tag)
						<span>{{ $tag->name }}<span class="glyphicon glyphicon-tags">&nbsp;</span></span>
					@endforeach
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
				@include('front/partials/aside')
			</div>
		</div>
	</div>