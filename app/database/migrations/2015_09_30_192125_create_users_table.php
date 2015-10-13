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
			$table->boolean('enabled')->default(1);
			$table->integer('profile_id')->unsigned();
			$table->foreign('profile_id')->references('id')->on('profiles');
			$table->string('name');
			$table->string('last_name')->nullable();
			$table->string('mother_last_name')->nullable();
			$table->string('email')->unique();
			$table->string('password');
			$table->string('remember_token')->nullable();
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
