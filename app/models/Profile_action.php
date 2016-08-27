<?php

class Profile_action extends Ardent {

	protected $fillable = array();
	protected $guarded = array();

	public static $rules = array(
		'enabled' => 'required',
		'profile_id' => 'required',
		'action_id' => 'required'
	);

	public static function insertProfileActions($profile_actions){

		$profile_actions_arr = [];

		foreach ($profile_actions as $profile => $actions) {
			
			$profile = Profile::where('name',$profile)->first();
			
			$actions = Action::whereIn('name', $actions)->get();

			foreach ($actions as $action) {

				$profile_actions_arr[] = array(
					'profile_id'=> $profile->id,
					'action_id'=> $action->id
				);

			}


		}

		Profile_action::insert($profile_actions_arr);

	}

}
