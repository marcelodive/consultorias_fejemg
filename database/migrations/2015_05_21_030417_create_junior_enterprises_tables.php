<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuniorEnterprisesTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('junior_enterprises', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100);
			$table->string('abbreviation', 25);
			$table->string('email', 100)->unique();
			$table->string('phone', 20);
			$table->string('website', 150);
			$table->integer('university_id')->unsigned();
			$table->foreign('university_id')->references('id')->on('universities');
			$table->integer('city_id')->unsigned();
			$table->foreign('city_id')->references('id')->on('cities');
			$table->string('image',1000);
			$table->timestamps('create_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('junior_enterprises');
	}

}
