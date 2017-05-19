<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Rutas del frontend
Route::get('/',[
		'as' => 'front.index',
		'uses' => 'FrontController@index'
]);

Route::get('categories/{name}',[
	'as' 	=> 'front.search.category',
	'uses' 	=> 'FrontController@searchCategory' 
]);

Route::get('tags/{name}',[
	'as' 	=> 'front.search.tag',
	'uses' 	=> 'FrontController@searchTag' 
]);

Route::get('articles/{slug}', [
	'uses' 	=> 'FrontController@viewArticle',
	'as' 	=> 'front.view.article'
]);

Route::get('not/found', [
	'uses' => 'FrontController@notFound',
	'as' => 'not.found'
]);

//Rutas panel de administracion
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	Route::get('/',['as' => 'admin.index', function() {
	    return view('welcome');
	}]);
	Route::group(['middleware' => 'admin'], function(){
		Route::resource('users','UsersController');
		Route::get('users/{id}/destroy',[
			'uses'  => 'UsersController@destroy',
			'as'    => 'users.destroy'
		]);
	});

	Route::resource('categories','CategoriesController');
	Route::get('categories/{id}/destroy',[
		'uses' => 'CategoriesController@destroy',
		'as'   => 'categories.destroy'	
	]);

	Route::resource('tags','TagsController');
	Route::get('tags/{id}/destroy',[
		'uses' => 'TagsController@destroy',
		'as'   => 'tags.destroy'	
	]);

	Route::resource('articles','ArticlesController');
	Route::get('articles/{id}/destroy', [
		'uses' => 'ArticlesController@destroy',
		'as'   => 'articles.destroy'
	]);

	Route::get('images',[
		'uses' => 'ImagesController@index',
		'as'   => 'images.index'
	]);
});

Auth::routes();

Route::get('/home', 'HomeController@index');
