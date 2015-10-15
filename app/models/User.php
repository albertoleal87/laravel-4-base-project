<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'users';
	
	protected $fillable = array('enabled','profile_id','name','last_name','mother_last_name','email','password');

	public static $rules = array(
		'profile_id' => 'required',
		'name' => 'required',
		'last_name' => 'required',
		'mother_last_name' => 'required',
		'email' => 'required|email|unique:users,email,{id}',
		'password' => 'required',
	);

	public function profile(){
		return $this->belongsTo('Profile','profile_id','id');
	}

	public function full_name(){
		return "{$this->name} {$this->last_name} {$this->mother_last_name}";
	}

	public function beforeValidate(){
		User::$customMessages = array(
			'name.required' => trans('users.name_required'),
			'last_name.required' => trans('users.last_name_required'),
			'mother_last_name.required' => trans('users.mother_last_name_required'),
			'email.required' => trans('users.email_required'),
			'email.email' => trans('users.email_email'),
			'email.unique' => trans('users.email_unique'),
			'password.required' => trans('users.password_required'),
		);
	}

	public static function canAccess($action){
		$permissions = Session::get('permissions');
		return (in_array($action, $permissions)) ? true : false;
	}


}
