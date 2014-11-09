<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class tbl extends Eloquent implements UserInterface, RemindableInterface {

use UserTrait, RemindableTrait;

    protected $table = 'users';
    
    protected $fillable = array('username', 'password', 'email');

  protected $hidden = array('password', 'remember_token');

    public function getAuthIdentifier(){
    	return $this->getKey;
    }
    public function getAuthPassword(){
    	return $this->password;
    }
  public function getReminderEmail()
{
    return $this->email;
}

}