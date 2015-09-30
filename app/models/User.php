<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'users';

	protected $hidden = array('password', 'remember_token');

	protected $fillable = array();
	
	protected $guarded = array();

	public static $rules = array(
		'profile_id' => 'required',
		'name' => 'required',
		'last_name' => 'required',
		'mother_last_name' => 'required',
		'email' => 'required',
		'password' => 'required',
	);

}
