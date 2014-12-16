<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stores', function($table) {
			# AI, PK
			$table->increments('id');
 
			# created_at, updated_at columns
			$table->timestamps();
 
			# General data...
			$table->string('store_name');
			$table->string('location');
			$table->integer('user_id')->unsigned(); #FK
			
			# Define foreign keys...
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stores');
	}

}
