<?php

class Profile_action extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'enable' => 'required',
		'profile_id' => 'required',
		'action_id' => 'required'
	);
}
