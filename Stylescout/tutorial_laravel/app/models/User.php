<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'users';
    protected $fillable = array('username', 'password', 'email');
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
 public function UserType ()
    {
        return $this->belongsTo('User');
  }
}
