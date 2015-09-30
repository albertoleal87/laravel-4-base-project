<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->boolean('enable')->default(1);
			$table->integer('profile_id')->unsigned();
			$table->foreign('profile_id')->references('id')->on('profiles');
			$table->string('name');
			$table->string('last_name');
			$table->string('mother_last_name');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('remember_token');
			$table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
