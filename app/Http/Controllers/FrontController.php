<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;
use App\Category;
use App\Tag;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function __construct()
	{
		Carbon::setlocale('es');
	} 

    public function index()
    {
    	$articles = Article::orderby('id','desc')->paginate(4);
    	$articles->each(function($articles){
    		$articles->category;
    		$articles->images;

    	});
        return view('front/index')
        	->with('articles',$articles);
    }

    public function searchCategory($name)
    {
        $category = Category::SearchCategory($name)->first();
        $articles = $category->articles()->paginate(4);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });
        
        return view('front/index')
            ->with('articles', $articles);
    }

    public function searchTag($name)
    {
       $tag = Tag::SearchTag($name)->first();
       $articles = $tag->articles()->paginate(4);
       $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });

        return view('front/index')
            ->with('articles', $articles);
    }

    public function viewArticle($slug)
    {
        $article = Article::findBySlugOrFail($slug);
        $article->category;
        $article->user;
        $article->tags;
        $article->images;
        return view('front/article')
            ->with('article', $article);
    }

    public function notFound()
    {
        return view('errors/404');
    }
    
}
