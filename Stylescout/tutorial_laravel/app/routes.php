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
	return View::make('index');
});
 
Route::get('/login',function(){
	return View::make('signin');
});

Route::get('/register',function(){
   
   return View::make('registration');
});

Route::get('/upload',array(
	'before' => 'checkAuth',
	function()
	{
	return View::make('uploada');
}));


Route::get('history',function(){
	return View::make('history');
});


Route::get('history/dandy.jpg',function(){

	return View::make('show');
});

Route::get('delete/{name}','ImageController@delete');
Route::get('hashtag/{id}','HashtagController@showHashtagPic');
Route::get('hashtag','HashtagController@getHashtag');
Route::get('edit','UserController@getEditProfile');
Route::post('edit','UserController@edit');
Route::get('/profile','UserController@showProfile');
Route::post('upload','ImageController@add');
Route::post('/registered','UserController@signUp');
Route::post('login','UserController@login');
Route::get('/logout','UserController@logout');
Route::get('report/{name}/','ImageController@report');

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

Route::get('portfolio',function(){
    return View::make('portfolio');
});
Route::post('manage','HashtagController@addHashtag');
Route::get('manage',function(){
	if(Auth::user()->Type==0){
		return Redirect::to('profile');
	}
	else {return View::make('manage');}
});