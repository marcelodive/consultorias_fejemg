<?php
use Illuminate\Database\Seeder;

class FieldsTableSeeder extends Seeder {
	public function run() {
		// Uncomment the below to wipe the table clean before populating
		DB::table ( 'fields' )->delete ();

		$fields = array (
				[
						'id' => null,
						'name' => 'Informática',
				],
		);
		
		// Uncomment the below to run the seeder
		DB::table ( 'fields' )->insert ( $fields );
	}
}
