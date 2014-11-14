<?php
require_once 'uploadpic.php';
include '../upload.html';
foreach (scandir(dirname(_FILE_).'/upload')as $filename){
	$path = dirname(_FILE_).'/upload/' . $filename;
	if(is_file($path)){
		require_once $path;
	}
}
class uploadtest extends PHPUnit_Framework_TestCase
		public $test;
{
    public function tesITCanUploadPic()
    {
        $Upload = new uploadpic();
		
		$clickbutton = new clickButton();
		$dummypicture = $this->getMock('PICS');
		$this->assrtTrue($Upload->uploadingPicture($clickbutton,$dummypicture));
    }
	
}
?>