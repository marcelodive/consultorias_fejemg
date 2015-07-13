<?php
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder {
	public function run() {
		// Uncomment the below to wipe the table clean before populating
		DB::table ( 'services' )->delete ();

		$services = array (
				[
						'id' => 53,
						'name' => 'Desenvolvimento de Website',
						'field_id' => 17
				],
		);
		
		// Uncomment the below to run the seeder
		DB::table ( 'services' )->insert ( $services );
	}
}