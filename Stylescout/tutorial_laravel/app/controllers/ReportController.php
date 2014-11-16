<?php

class ReportController extends  BaseController{
  
  //report the unsuitable image
  protected function sendReport($name){
   if(Auth::user()->type ==0){
    $setReport = Imagea::where('name','=',$name)->first();
	$setReport->report = 1;
	$setReport->save();
	return Redirect::back();
  }
    }
    protected function checkSave($name){
    if(Auth::user()->type ==1){
	 $setSave = Imagea::where('name','=',$name)->first();
	 $setSave->report = 0;
	 $setSave->save();
	 return Redirect::back();
    }
}
    protected function delete($name){
	 if(Auth::user()->type ==1){
	 $setDel = Imagea::where('name','=',$name)->first();
	 $setDel->delete();
	 return Redirect::back();
    }
}
}
    
