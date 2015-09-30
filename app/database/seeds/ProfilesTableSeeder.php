<?php

class ProfilesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('profiles')->truncate();

		$profiles = array(
			array('name'=>'Administrator', 'description'=>'Administrator'),
			array('name'=>'User', 'description'=>'User'),
		);

		// Uncomment the below to run the seeder
		DB::table('profiles')->insert($profiles);
	}

}
