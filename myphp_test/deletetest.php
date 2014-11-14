<?php
require_once 'deletepic.php';
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
        $Delete = new deletepic();
		
		$clickbutton = new clickButton();
		$dummypicture = $this->getMock('PICS');
		$this->assrtTrue($Delete->deletingPicture($clickbutton,$dummypicture));
    }
	
}
?>