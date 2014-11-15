<?php

class HashtagController extends  BaseController{
	
	protected function addHashtag(){
      $tag = new Hashtag;
      $tag->hashtag = Input::get('hashtag');
      $tag->caption = Input::get('caption');
      $destinationPath = 'assets/bootstrap/image/hashtag';
      $filename = Input::file('pic')->getClientOriginalName();
      Input::file('pic')->move($destinationPath,$filename);
      $tag->pic = $destinationPath.'/'.$filename;
      $tag->save();
      return Redirect::to('portfolio');
	}
    
    protected function getHashtag(){
    	$tag = Hashtag::all();
    return View::make('hashtaglist')->with('tag',$tag);
}
    
    protected function showHashtagPic($id){
    $tag = Hashtag::find($id)->first();
    return View::make('showhashtag',array('tag'=>$tag));
    }

}
