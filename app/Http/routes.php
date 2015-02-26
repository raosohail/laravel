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
session_start();
Route::get('/', 'WelcomeController@index');
Route::get('/signup', function(){
	return view('signup');
	});
	
Route::get('/post', function(){
	return view('post');
	});
Route::post('/post/','userController@post');
Route::post('/signup/','userController@signUp');	
	

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('/login/', function(){
	return view('login');
	
});
Route::post('/login/','userController@login');