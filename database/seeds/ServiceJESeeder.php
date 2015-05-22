<?php
use Illuminate\Database\Seeder;

class ServiceJESeeder extends Seeder {
	public function run() {
		// Uncomment the below to wipe the table clean before populating
		DB::table ( 'service_je' )->delete ();

		$serviceJE = array (
				[
						'service_id' => 1,
						'je_id' => 1
				],
		);
		
		// Uncomment the below to run the seeder
		DB::table ( 'service_je' )->insert ( $serviceJE );
	}
}