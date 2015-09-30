<?php

class Setting extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'key' => 'required',
		'value' => 'required',
		'description' => 'required'
	);
}
