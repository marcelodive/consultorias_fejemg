<?php
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder {
	public function run() {
		// Uncomment the below to wipe the table clean before populating
		DB::table ( 'services' )->delete ();

		$services = array (
				[
						'id' => null,
						'name' => 'Desenvolvimento de Website',
						'field_id' => 1
				],
		);
		
		// Uncomment the below to run the seeder
		DB::table ( 'services' )->insert ( $services );
	}
}