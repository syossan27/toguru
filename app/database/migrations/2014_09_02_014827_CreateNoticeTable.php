<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!Schema::hasTable('notice')) 
		{
			Schema::create('notice', function($table) {
					$table->increments('id');
					$table->string('sender_id', 20);
					$table->string('receiver_id', 20);
					$table->tinyInteger('type');
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
		Schema::dropIfExists('notice');
	}

}
