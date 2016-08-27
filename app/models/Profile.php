<?php

class Profile extends Ardent {

	protected $fillable = array();
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required|unique:profiles,name,{id}',
	);

	public function beforeValidate(){
		User::$customMessages = array(
			'name.required' => trans('profiles.name_required'),
			'name.unique' => trans('profiles.name_unique'),
		);
	}

	public function actions(){
		return $this->belongsToMany('Action', 'profile_actions', 'profile_id', 'action_id');
	}

	public function actions_enabled(){
		return $this->belongsToMany('Action', 'profile_actions', 'profile_id', 'action_id')->where('actions.enabled',1)->where('profile_actions.enabled',1)->get();
	}

}
