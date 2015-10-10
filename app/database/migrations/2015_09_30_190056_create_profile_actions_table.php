<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfileActionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile_actions', function(Blueprint $table) {
			$table->increments('id');
			$table->boolean('enable')->default(1);
			$table->integer('profile_id')->unsigned();
			$table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
			$table->integer('action_id')->unsigned();
			$table->foreign('action_id')->references('id')->on('actions')->onDelete('cascade');
			$table->unique(array('profile_id','action_id'));
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
		Schema::drop('profile_actions');
	}

}
