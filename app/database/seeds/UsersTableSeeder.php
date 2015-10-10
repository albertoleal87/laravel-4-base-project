<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		if(!User::where('email', '=', 'administrator@test.com')->exists()) {
			DB::table('users')->insert(array(
				'profile_id' => Profile::where('name','Administrator')->first()->id,
				'name' => 'Administrator',
				'email' => 'administrator@test.com',
				'password' => Hash::make('123456'),
			));
		}
	}

}
