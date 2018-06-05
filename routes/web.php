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
Route::view('/register', 'Auth.register')->name('register');
Route::view('/login', 'Auth.login')->name('login');



Route::get('topic/{topic}/{id}', 'RouteController@topic')->name('topic');
Route::get('forum/{topic}/{id}', 'RouteController@forum')->name('forum');
Route::get('tags/{topic}/{id}', 'RouteController@tags')->name('tags');
Route::get('trend/{topic}/{id}', 'RouteController@trends')->name('trend');
Route::get('/getLikeDisLike', 'TopiController@getLikesDislikes');

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

//login from login page
Route::post('/loginPage', [
	'uses'=>'UserController@loginPage',
	'as'=>'loginPage'
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


Route::post('/like', [
	'uses'=> 'TopiController@Like',
	'as'=> 'like'

]);


Route::post('/dislike', [
	'uses'=> 'TopiController@Dislike',
	'as'=> 'dislike'

]);
