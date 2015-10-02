<?php

class ActionsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('actions')->truncate();

		$actions = array(			
			array('name'=>'settings.index'),
			array('name'=>'settings.create'),
			array('name'=>'settings.store'),
			array('name'=>'settings.edit'),
			array('name'=>'settings.update'),
			array('name'=>'settings.show'),
			array('name'=>'settings.destroy'),

			array('name'=>'actions.index'),
			array('name'=>'actions.create'),
			array('name'=>'actions.store'),
			array('name'=>'actions.edit'),
			array('name'=>'actions.update'),
			array('name'=>'actions.show'),
			array('name'=>'actions.destroy'),

			array('name'=>'profiles.index'),
			array('name'=>'profiles.create'),
			array('name'=>'profiles.store'),
			array('name'=>'profiles.edit'),
			array('name'=>'profiles.update'),
			array('name'=>'profiles.show'),
			array('name'=>'profiles.destroy'),

			array('name'=>'profile_actions.index'),
			array('name'=>'profile_actions.create'),
			array('name'=>'profile_actions.store'),
			array('name'=>'profile_actions.edit'),
			array('name'=>'profile_actions.update'),
			array('name'=>'profile_actions.show'),
			array('name'=>'profile_actions.destroy'),

			array('name'=>'users.index'),
			array('name'=>'users.create'),
			array('name'=>'users.store'),
			array('name'=>'users.edit'),
			array('name'=>'users.update'),
			array('name'=>'users.show'),
			array('name'=>'users.destroy'),

		);

		// Uncomment the below to run the seeder
		DB::table('actions')->insert($actions);
	}

}
