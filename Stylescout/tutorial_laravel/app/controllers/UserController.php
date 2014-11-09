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
        //$authUser = tbl::where('username', '=', Input::get('username'))->first();
        //$authPass = tbl::where('password', '=', Hash::make(Input::get('password')))->first();
            if(Auth::attempt($data)){
               return Redirect::to('/profile');
           } else {

               return Redirect::to('/login');
             }
        } 

   }


    protected function editProfile(){}
    protected function logout(){
        Auth::logout();
        return Redirect::to('/');
    }
 

}

