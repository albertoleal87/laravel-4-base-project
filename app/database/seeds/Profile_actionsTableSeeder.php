<?php

class Profile_actionsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('profile_actions')->truncate();

		$profile_actions = array(
			'Administrator' => array(
				'settings.index',
				'settings.create',
				'settings.store',
				'settings.edit',
				'settings.update',
				'settings.show',
				'settings.destroy',

				'actions.index',
				'actions.create',
				'actions.store',
				'actions.edit',
				'actions.update',
				'actions.show',
				'actions.destroy',

				'profiles.index',
				'profiles.create',
				'profiles.store',
				'profiles.edit',
				'profiles.update',
				'profiles.show',
				'profiles.destroy',

				'profile_actions.index',
				'profile_actions.create',
				'profile_actions.store',
				'profile_actions.edit',
				'profile_actions.update',
				'profile_actions.show',
				'profile_actions.destroy',

				'users.index',
				'users.create',
				'users.store',
				'users.edit',
				'users.update',
				'users.show',
				'users.destroy',
			),
			'User' => array(
			),
		);


		// Uncomment the below to run the seeder
		Profile_action::insertProfileActions($profile_actions);
	}

}
