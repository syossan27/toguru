<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!Schema::hasTable('connection')) 
		{
			Schema::create('connection', function($table) {
					$table->increments('id');
					$table->string('master_id', 20);
					$table->string('pupil_id', 20);
					$table->tinyInteger('status');
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
		Schema::dropIfExists('connection');
	}

}
