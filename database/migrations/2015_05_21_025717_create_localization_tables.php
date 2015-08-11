<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalizationTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
// 		Schema::create ( 'countries', function (Blueprint $table) {
// 			$table->increments ( 'id' );
// 			$table->string('name', 60);
// 			$table->string('abbreviation', 10);
// 		} );
		
// 		Schema::create ( 'states', function (Blueprint $table) {
// 			$table->increments ( 'id' );
// 			$table->string('name', 75);
// 			$table->string('uf', 5);
// 			$table->integer('country_id')->unsigned();
// 			$table->foreign('country_id')->references('id')->on('countries');
// 		} );		
		
// 		Schema::create ( 'cities', function (Blueprint $table) {
// 			$table->increments ( 'id' );
// 			$table->string('name', 120);
// 			$table->integer('state_id')->unsigned();
// 			$table->foreign('state_id')->references('id')->on('states');
// 		} );	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
// 		Schema::drop('cities');
// 		Schema::drop('states');
// 		Schema::drop('countries');
	}

}
