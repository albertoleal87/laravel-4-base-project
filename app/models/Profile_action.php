<?php

class Profile_action extends Ardent {

	protected $fillable = array();
	protected $guarded = array();

	public static $rules = array(
		'enabled' => 'required',
		'profile_id' => 'required',
		'action_id' => 'required'
	);
}
