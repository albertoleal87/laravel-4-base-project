<?php

class Action extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'enable' => 'required',
		'name' => 'required',
		'description' => 'required'
	);
}
