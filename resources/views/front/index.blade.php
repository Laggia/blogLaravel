@extends('admin/template/main')

@include('admin/template/partials/nav')
<div class="container">
	<div class="row">
		<div class="col-md-8">
		<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="text-center">{{ trans('app.title_last_articles') }}</h3>		
					<h4>{{ trans('app.test', ['name' => 'Felipe', 'company' => 'Laggia LTDA']) }}</h4>
				</div>
			</div>
			<div class="row">
				@foreach ($articles as $article)	
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<a href="{{ route('front.view.article', $article->slug) }}" class="thumbnail">
							@foreach ($article->images as $image)
								<img class="img-responsive img-article" src="{{ asset('images/articles/'.$image->name) }}" alt="">
							@endforeach
							</a>
							<a href="{{ route('front.view.article', $article->slug) }}">
								<h3 class="text-center">{{ $article->title }}</h3>
							</a>	
							<hr>
							<i class="fa fa-folder-open-o"></i> <a href="{{ route('front.search.category', $article->category->name) }}">{{ $article->category->name }}</a>
							<div class="pull-right">
								<i class="fa fa-clock-o"></i> {{ $article->created_at->diffForHumans() }}
							</div>
						</div>
					</div>
				</div>
				@endforeach	
			</div>
			<div class="text-center">
				{!! $articles->render() !!}
			</div>
		</div>
		<div class="col-md-4 aside">
			@include('front/partials/aside')
		</div>
	</div>	
</div>