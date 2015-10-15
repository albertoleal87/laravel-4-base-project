<?php

class Setting extends Ardent {

	protected $table = 'settings';

	protected $fillable = array();
	protected $guarded = array();

	public static $rules = array(
		'key' => 'required',
		'value' => 'required',
		'description' => 'required',
	);

	public static $booleans = array(
		'app.debug',
		'database.log_query',
		'app.log_in_console',
	);

	public static function setSettingsFromDB(){

		$settings = Setting::all();

		foreach($settings as $setting) {
			if(in_array($setting->key, Setting::$booleans)){
				$setting->value = Setting::parseBool($setting->value);
			}
			Config::set($setting->key,$setting->value);
		}

	}

	public static function parseBool($value){
		return (strtolower($value) == 'true') ? true : false;
	}

}
