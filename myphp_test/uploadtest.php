<?php

require_once 'ImageController.php'; 
include_once '../upload.html';

class uploadtest extends PHPUnit_Framework_TestCase
{
   public static function mockImage($hashtag,$caption,$images){
   
		$image= new Images();
		$image->images($images);
		$image->hashtag($hahtag);
		$image->caption($caption);
		return $image;
   }
   public function testAdd(){
		$mock = uploadtest::mockImage('testHashtag','testCaption','testImage');
		$this->assertTrue('testImage',$result->images);
		$this->assertEquals('testHashtag',$result->hahtag);
		$this->assertEquals('testCaption',$result->caption);

   }
}
?>