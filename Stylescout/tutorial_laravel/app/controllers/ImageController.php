<?php

class ImageController extends BaseController {
	

protected function add(){
  
    
    $input = Input::file('images');
     //var_dump(Input::file('image'));
     //var_dump($input->getRealPath());
    $image = new Image;
    $image->username = Auth::user()->username;
    $image->hashtag = Input::get('hashtag');
    $image->caption = Input::get('caption');

    $image->name = Input::file('images')->getClientOriginalName();
    $destinationPath = 'assets/bootstrap/image/upload';


    Input::file('images')->move($destinationPath,$image->name);
    $image->path = $destinationPath.'/'.$image->name;

    $image->save();
    return Redirect::to('profile');
}

protected function delete($name){
   $new = Image::where('name','=',$name)->first();
   $new->delete();
   return Redirect::to('history');
}

protected function showPicTag(){
    
}

}