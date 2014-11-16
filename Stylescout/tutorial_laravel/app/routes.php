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
//return homepage
Route::get('/',function(){
	return View::make('index');
});
 //log in page
Route::get('/login',function(){
	return View::make('signin');
});
// About us page
Route::get('/aboutus',function(){
return View::make('aboutus');
});
//register page
Route::get('/register',function(){
   return View::make('registration');
});
//upload page
Route::get('/upload',array(
	'before' => 'checkAuth',
	function()
	{
	return View::make('uploada');
}));
//history page
Route::get('history',function(){
	return View::make('history');
});

Route::get('history/{picname}','ImageController@show');  //show picture in history page
Route::get('delete/{name}','ImageController@delete'); // delete image
Route::get('deletes/{hashtag}','HashtagController@deleteTag'); // delete hashtag
Route::get('hashtag/{hashtag}','HashtagController@showHashtagPic'); //access to image by hashtag
Route::get('hashtag','HashtagController@getHashtag'); //hashtag page
Route::get('/edit','UserController@getEditProfile'); //edit page
Route::post('edit','UserController@edit');
Route::get('/profile','UserController@showProfile'); // profile page
Route::get('/profile/{username}','UserController@getOtherProfile'); //other profile page
Route::post('upload','ImageController@add');
Route::post('/registered','UserController@signUp');
Route::post('login','UserController@login');
Route::get('/logout','UserController@logout'); //logout
Route::get('report/{name}/','ReportController@sendReport'); //report image
Route::get('reportkeep/{name}','ReportController@checkSave'); //make it suite image
Route::get('reportdel/{name}','ReportController@delete');//delete unsuited image

Route::get('report',function(){
return View::make('showreport');
});

Route::get('portfolio',function()	{
    return View::make('portfolio');
});
Route::post('manage','HashtagController@addHashtag');
Route::get('manage',function(){
	if(Auth::user()->Type==0){
		return Redirect::to('profile');
	}
	else {return View::make('manage');}
});