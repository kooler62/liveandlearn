<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/404', function () {return view('error.404');});


Route::auth();
#Route::get('/home', 'HomeController@index');

// Маршруты аутентификации...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Маршруты регистрации...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


#		ПОСТЫ
Route::get('/','PostController@index');
Route::get('/posts',['as'=>'posts','uses'=>'PostController@posts']);
Route::get('/p/{id}','PostController@short_url')->where(['id' => '[0-9]+']);
Route::get('/{year}','PostController@post_year')->where(['year' => '[2][0]\d{2}','month' => '[0]?[1-9]|[1][0-2]']);
Route::get('/{year}/{month}','PostController@post_month')->where(['year' => '[2][0]\d{2}','month' => '[0]?[1-9]|[1][0-2]']);
Route::get('/{year}/{month}/{day}','PostController@post_day')->where(['year' => '[2][0]\d{2}','month' => '[0]?[1-9]|[1][0-2]','day' => '[0]?[1-9]|[1-2][0-9]|[3][0-1]']);
Route::get('/{year}/{month}/{day}/{slug}','PostController@post')
//год 20** месяц: 1-12  день: 1-31
->where(['year' => '[2][0]\d{2}','month' => '[0]?[1-9]|[1][0-2]','day' => '[0]?[1-9]|[1-2][0-9]|[3][0-1]']);


#		КАТЕГОРИИ
Route::get('/categories',['as'=>'categories','uses'=>'CategoryController@index']);
Route::get('/categories/{slug}','CategoryController@index');


#		ЦЫТАТЫ
Route::get('/excerptions',['as'=>'excerptions','uses'=>'ExcerptionsController@index']);
Route::post('/excerptions','ExcerptionsController@ajax');
Route::get('/excerptions/{id}','ExcerptionsController@index')->where('id', '[0-9]+');


#		АВТОРЫ
//Route::get('/authors','AuthorController@index');
Route::get('/authors', ['as' => 'authors', 'uses' => 'AuthorController@index']);
Route::get('/authors/{slug}','AuthorController@index');


#		СТРАНИЦЫ
Route::get('/page',['as'=>'page','uses'=>'PageController@index']);
Route::get('/page/{slug}','PageController@index');


#		СПЕЦ ПРОЕКТЫ
Route::get('about', function() {	return view('pages.about');});
Route::get('reklama', function () {	return view('pages.reklama');});
Route::get('special', function () {	 return view('pages.special');});
Route::get('be_author', function () {	 return view('pages.co_author');});



#Route::get('/test','TestController@index');
Route::get('/test','TestController@index');
Route::post('/test','TestController@ajax');

Route::get('/admin','AdminController@index');Route::auth();
Route::get('/home', 'HomeController@index');
