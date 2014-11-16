<?php

class UserController extends  BaseController{
	
	//register
	protected function signUp(){
        $input = Input::all();
        $rule = array(
            'username'=> 'unique:users',
            'email'=>'unique:users|email',
            'password'=>'Min:8',
            );
        $v = Validator::make($input,$rule); 
        if($v->passes()){ //check validate
        $password = Input::get('password');
        $password = Hash::make($password);
        $user = new User;
        $user->username = Input::get('username');
        $user->password = $password;
        $user->email = Input::get('email');
        $user->contact = 'Add your contact...'; //set default contact
        $user->bio = 'Add more descriptions...'; //set default bio
        $user->profile_pic = "assets/bootstrap/public.jpg"; //set default profile pic
        $user->save();
       return  Redirect::to('/login'); //success
	   }
       else {
       return  Redirect::to('/')->withInput()->withErrors($v); //error
}
}
 
//log in to profile
   protected function login(){
      $input = Input::all();
      $rule = array(
          'username' =>'required',
          'password' =>'required'
          );
      $v = Validator::make($input,$rule); //check validate
      if($v -> fails()){
        return $input;
      } else {
        $data = array(
          'username'=>Input::get('username'),
          'password'=>Input::get('password')
          );
          
            if(Auth::attempt($data)){
                if(Auth::user()->Type == 1){ //if admin
                  $check = Auth::user()->Type;
                   return Redirect::to('manage')->with('check',$check); //return to admin page
                  } 
                 else if(Auth::user()->Type == 0) { //if user 
                   return Redirect::to('profile'); // retunr to profile page
                  }
           else {
               return Redirect::to('/login'); //error return to login page
             }
      }
    }
}
   //request profile page
    protected function showProfile(){
      $thatMember = Auth::user();
       return View::make('/profile')->with('user',$thatMember);
    }

   //request edit profile page
    protected function getEditProfile(){
      $user = Auth::user();
      return View::make('/editprofile')->with('user',$user);
    }
    //request otherprofile page
	protected function getOtherProfile($username){
	 $member = DB::table('users')->where('username','=',$username)->lists('username');
      return View::make('/otherprofile',array('user'=>$username));	  
    }
	// edit profile
    protected function edit(){
       $user = Auth::user();
       $user->contact = Input::get('contact');
       $user->bio = Input::get('bio');
       if(Input::file('profilepic')!=NULL){
        $destinationPath = public_path().'/uploadpic/profile_picture';
          $filename = Input::file('profilepic')->getClientOriginalName();
        Input::file('profilepic')->move($destinationPath,$filename);
        $user->profile_pic = "uploadpic/profile_picture/".$filename;
       }
       $user->save();
       return Redirect::to('profile');
}

   //log out
    protected function logout(){
        Auth::logout();
        return Redirect::Intended('/');
    }
 

}

