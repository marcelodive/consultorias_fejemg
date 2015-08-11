<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceJeTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('service_je', function(Blueprint $table)
		{
			$table->integer('service_id')->unsigned();
			$table->foreign('service_id')->references('id')->on('services');
			$table->integer('je_id')->unsigned();
			$table->foreign('je_id')->references('id')->on('junior_enterprises');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('service_je');
	}

}
