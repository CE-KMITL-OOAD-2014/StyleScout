<?php

class ImageController extends BaseController {
	
//upload image
protected function add(){
  $input = Input::all();
	 $rules = array(
            'images' => 'image|max:2100'
        );
	$v = Validator::make($input, $rules); //check validate
	if ($v->fails()){
		return Redirect::to('upload')->withErrors($v); //if fail return to upload page
	}
    else{
    $image = new Imagea;
    $image->username = Auth::user()->username;
    $image->hashtag = Input::get('hashtag');
    $image->caption = Input::get('caption');
    $image->name = Input::file('images')->getClientOriginalName();
    $destinationPath = public_path().'/uploadpic';
    Input::file('images')->move($destinationPath,$image->name);
    $image->path = "uploadpic/".$image->name;
	$image->save();
    return Redirect::to('profile'); //upload success
	}
}
// delete image
protected function delete($name){
   $new = Imagea::where('name','=',$name)->first();
   $new->delete();
   return Redirect::to('history');
}
//show image when click
protected function show($picname){
    return View::make('showImage')->with('img',$picname);
}
// report the image
protected function report($name){
    $new = Imagea::where('name','=',$name)->first();
    $new->report++;
    var_dump($new->report);
    $new->save();
    // return Redirect::to('history');
}
}