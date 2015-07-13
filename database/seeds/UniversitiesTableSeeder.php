<?php
use Illuminate\Database\Seeder;

class UniversitiesTableSeeder extends Seeder {
	public function run() {
		// Uncomment the below to wipe the table clean before populating
		DB::table ( 'universities' )->delete ();

		$universities = array (
				[
						'id' => 1,
						'name' => 'Universidade Federal de Minas Gerais',
				],
				[
						'id' => 2,
						'name' => 'Universidade Federal de Viçosa',
				],
		);

		// Uncomment the below to run the seeder
		DB::table ( 'universities' )->insert ( $universities );
	}
}
