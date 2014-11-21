<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('persons', function($table) {
			# AI, PK
			$table->increments('id');
 
			# created_at, updated_at columns
			$table->timestamps();
 
			# General data...
			$table->string('name');
			$table->string('family_role');
			
			# Define foreign keys...
			# none needed
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('persons');
	}

}
