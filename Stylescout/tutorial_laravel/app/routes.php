<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/',function(){
	return View::make('home');
});
 
Route::get('/login',function(){
	return View::make('signin');
});

Route::get('/register',function(){
   
   return View::make('registration');
});

Route::get('/profile',function(){
	return View::make('profile');
});

Route::post('/registered','UserController@signUp');
Route::post('login','UserController@login');
Route::post('/logout','UserController@logout');

Route::get('mail/', function()
{

    $user = 'abc';
    
    $data = ['user' => $user];

	Mail::send('test1', $data, function($message) use ($data)
	{
		$message->to('aquamade616@gmail.com')->subject('Hello');
	});

	return 'done';
	//return View::make('hello');
});
