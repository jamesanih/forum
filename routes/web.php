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

Route::get('/', [
	'uses'=> 'RouteController@getTopic',
	'as'=> 'index'
]);

Route::view('/new_topic', 'pages.new_topic')->name('new_topic');



Route::get('topic/{topic}/{id}', 'RouteController@topic')->name('topic');
Route::get('forum/{topic}/{id}', 'RouteController@forum')->name('forum');
Route::get('tags/{topic}/{id}', 'RouteController@tags')->name('tags');
Route::get('trend/{topic}/{id}', 'RouteController@trends')->name('trend');

Route::get('/logout',[
			'uses'=>'UserController@Logout',
			'as'=> 'logout'
		]);




//Post routes

//login
Route::post('/signin', [
	'uses'=>'UserController@signin',
	'as'=>'signin'
]);

//register
Route::post('/register', [
	'uses'=>'UserController@register',
	'as'=>'register'
]);


//comment
Route::post('/comment', [
	'uses'=>'CommentController@Comment',
	'as'=>'comment'
]);


Route::post('/newTopic', [
	'uses'=>'TopiController@createTopic',
	'as'=>'newTopic'
]);
