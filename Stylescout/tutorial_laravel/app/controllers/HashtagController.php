<?php

class HashtagController extends  BaseController{
	
	//add Hashtag by admin
	protected function addHashtag(){
      $tag = new Hashtag;
      $tag->hashtag = Input::get('hashtag');
      $tag->caption = Input::get('caption');
      $destinationPath = public_path().'/uploadpic/hashtag_pic';
      $filename = Input::file('pic')->getClientOriginalName();
      Input::file('pic')->move($destinationPath,$filename);
      $tag->pic = "uploadpic/hashtag_pic/".'/'.$filename;
      $tag->save();
      return Redirect::to('portfolio');
	}
    //get all hashtag to display
    protected function getHashtag(){
    	$tag = Hashtag::all();
    return View::make('hashtaglist')->with('tag',$tag);
}
    //show picture when click in hashtaglist page
    protected function showHashtagPic($hashtag){ 
	 $hashname = DB::table('hashtag')->where('hashtag','=',$hashtag)->lists('hashtag');
     $capt = DB::table('hashtag')->where('hashtag','=',$hashtag)->lists('caption');
	return View::make('showhashtag',array('thisHash'=>$hashname,'thisCapt'=>$capt));
    }
	//delete hashtag
	protected function deleteTag($hashtag){
	 $target = Hashtag::where('hashtag','=',$hashtag)->first();
     $target->delete();
   return Redirect::to('portfolio');

}
}