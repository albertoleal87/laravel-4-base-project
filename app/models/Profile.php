<?php

class Profile extends Ardent {

	protected $fillable = array();
	protected $guarded = array();

	public static $rules = array(
		'enabled' => 'required',
		'name' => 'required',
		'description' => 'required'
	);
}
