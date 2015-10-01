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

	public function permissions(){
		return Profile_action::select('actions.name as name','actions.id as id')
			->join('profiles', 'profiles.id', '=', 'profile_actions.profile_id')
			->join('actions', 'actions.id', '=', 'profile_actions.action_id')
			->where('profiles.enable', 1)
			->where('actions.enable', 1)
			->where('profiles.id', $this->profile_id)
			->lists('name','id');
	}

	public static function canAccess($action){
		$permissions = Session::get('permissions');
		return (in_array($action, $permissions)) ? true : false;
	}

}
