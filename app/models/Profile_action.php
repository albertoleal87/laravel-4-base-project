<?php

class Profile_action extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'enable' => 'required',
		'profile_id' => 'required',
		'action_id' => 'required'
	);

	public static function insertProfileActions($profile_actions){
		
		$profile_actions_array = array();

		foreach ($profile_actions as $profile => $actions) {

			$profile = Profile::where('name', $profile)->firstOrFail();				
			$actions = Action::whereIn('name', $actions)->get();

			foreach ($actions as $action) {
				
				$profile_actions_array[] = array(
					'profile_id'=> $profile->id,
					'action_id'=> $action->id,
				);
			}
		}

		Profile_action::insert($profile_actions_array);

	}
}
