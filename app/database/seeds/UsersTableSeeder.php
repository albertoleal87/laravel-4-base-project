<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

		$users = array(
			array(	
				'profile_id' => Profile::where('name','Administrator')->first()->id,
				'name' => 'Administrator',
				'email' => 'administrator@test.com',
				'password' => Hash::make('123456'),
			),
		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($users);
	}

}
