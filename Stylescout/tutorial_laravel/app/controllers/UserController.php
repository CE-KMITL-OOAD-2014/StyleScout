<?php

class UserController extends  BaseController{
	
	protected function signUp(){
         
        $input = Input::all();
        $rule = array(
            'username'=> 'unique:users',
            'email'=>'unique:users|email',
            'password'=>'Min:8',
            );

        $v = Validator::make($input,$rule);

        if($v->passes()){
       $password = Input::get('password');
        $password = Hash::make($password);
        $user = new User;
        $user->username = Input::get('username');
        $user->password = $password;
        $user->email = Input::get('email');
        $user->contact = 'Add your contact...';
        $user->bio = 'Add more descriptions...';
        $user->profile_pic = "assets/bootstrap/public.jpg";
        $user->save();
       return  Redirect::to('/login');
	   }
       else {
       return  Redirect::to('/')->withInput()->withErrors($v);
}
}
 

   protected function login(){
      $input = Input::all();
      $rule = array(
          'username' =>'required',
          'password' =>'required'
          );
      $v = Validator::make($input,$rule);
      if($v -> fails()){
        return $input;
      } else {
        $data = array(
          'username'=>Input::get('username'),
          'password'=>Input::get('password')
          );
          
            if(Auth::attempt($data)){
                if(Auth::user()->Type == 1){
                  $check = Auth::user()->Type;
                   return Redirect::to('manage')->with('check',$check);
                  } 
                 else if(Auth::user()->Type == 0) {
                   return Redirect::to('profile');
                  }
           else {
               return Redirect::to('/login');
             }
      }
    }
}



    protected function showProfile(){
      $thatMember = Auth::user();
       return View::make('/profile')->with('user',$thatMember);
    }



    protected function getEditProfile(){
      $user = Auth::user();
      return View::make('editProfile')->with('user',$user);
    }


    protected function edit(){
       $user = Auth::user();
       $user->contact = Input::get('contact');
       $user->bio = Input::get('bio');
       if(Input::file('profilepic')!=NULL){
        $destinationPath = 'assets/bootstrap/image';
        $filename = Input::file('profilepic')->getClientOriginalName();
        Input::file('profilepic')->move($destinationPath,$filename);
        $user->profile_pic = $destinationPath.'/'.$filename;
       }
       $user->save();
       return Redirect::to('profile');
    }



    protected function logout(){
        Auth::logout();
        return Redirect::Intended('/');
    }
 

}

