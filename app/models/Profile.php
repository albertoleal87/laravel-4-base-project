<?php

class Profile extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'description' => 'required'
	);

	public function actions(){
		return $this->belongsToMany('Action', 'profile_actions', 'profile_id', 'action_id');
	}

	public function actions_enabled(){
		return $this->belongsToMany('Action', 'profile_actions', 'profile_id', 'action_id')->where('actions.enabled',1)->where('profile_actions.enabled',1)->get();
	}

}
