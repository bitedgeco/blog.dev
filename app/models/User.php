<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function posts()
	{
		return $this->hasMany('Post');
	}

	public static $logInRules = array(
	    'email'	=> 'required',
	    'password' => 'required',
	);

	public static $NewUserRules = array(
		'screen_name' => 'required',
		'email'	=> 'required | email',
		'password' => 'required | confirmed',
		'password_confirmation' => 'required',
	);

	public static function findByScreenNameOrEmail($input)
	{
		return User::where('email', 'like' , $input)
					-> orWhere('screen_name', 'like', $input)->first();
	}

}
