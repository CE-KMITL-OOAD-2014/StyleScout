<?php
require_once 'ImageController.php';
include '../delete.html';

foreach (scandir(dirname(_FILE_).'/delete')as $filename){
	$path = dirname(_FILE_).'/delete/' . $filename;
	if(is_file($path)){
		require_once $path;
	}
}
class deletetest extends PHPUnit_Framework_TestCase
		public $test;
{
    public function tesITCanDeletePic()
    {
        $Delete = new deleteimage();
		
		$clickbutton = new clickButton();
		$dummypicture = $this->getMock('images');
		$this->assertTrue($Delete->deletingPicture($clickbutton,$dummypicture));
    }
	
}
?>