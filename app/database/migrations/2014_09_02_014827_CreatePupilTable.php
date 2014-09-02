<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePupilTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!Schema::hasTable('pupil')) 
		{
			Schema::create('pupil', function($table) {
					$table->increments('id');
					$table->string('user_id', 20);
					$table->string('skill', 255);
					$table->string('description', 255);
					$table->timestamps();
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('pupil');
	}

}
