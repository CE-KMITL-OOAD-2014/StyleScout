<?php
require_once 'HashtagController.php'; 
require_once 'ImageController.php';
require_once 'Image.php';
require_once 'Hashtag';
require_once 'User';
include_once '../HashtagList.html';

class SeeEachImageInHashtagList extends PHPUnit_Framework_TestCase
{
   public static function mockHashtag($tag,$image){
   
		$tag= new Hashtag();
		$tag->pic($images);
		$tag->hashtag($hahtag);
		$tag->caption($caption);
		return $image;
   }
   public function testTag(){
		$mock = SeeEachImageInHashtagList::mockHashtag('testHashtag','testCaption','testImage');
		$showHashtagPic = new repository\HashtagList();
		$HashtagPic = new hashtagPic();
		$HashtagPic->id = bossboss;
		$user = new HashtagList();
		$user->showHashtagPic= 'showHashtag';
		$result = $showHashtagPic->findAndShowHashtag($HashtagPic,$mock,$user);
		$this->assertTrue('testImage',$result->images);
		$this->assertEquals('testHashtag',$result->hahtag);
		$this->assertEquals('testCaption',$result->caption);
	}
}
?>