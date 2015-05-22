<?php
use Illuminate\Database\Seeder;

class UniversitiesTableSeeder extends Seeder {
	public function run() {
		// Uncomment the below to wipe the table clean before populating
		DB::table ( 'universities' )->delete ();

		$universities = array (
				[
						'id' => null,
						'name' => 'Universidade Federal de Minas Gerais',
				],
		);

		// Uncomment the below to run the seeder
		DB::table ( 'universities' )->insert ( $universities );
	}
}
