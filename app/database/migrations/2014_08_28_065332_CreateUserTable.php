<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!Schema::hasTable('users')) 
		{
			Schema::create('users', function($table) {
					$table->increments('id');
					$table->string('username', 20);
					$table->string('password', 64);
					$table->biginteger('fb_id')->unsigned();
					$table->string('fb_name');
					$table->string('fb_access_token');
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
		Schema::dropIfExists('users');
	}

}
