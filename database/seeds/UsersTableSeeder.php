<?php
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
	public function run() {
		// Uncomment the below to wipe the table clean before populating
		DB::table ( 'users' )->delete ();

		$users = array (
				[
						'id' => 1,
						'name' => 'Marcelo Pereira Rodrigues',
						'email' => 'marcelo.rodrigues@ijunior.com.br',
						'password' => '',
						'phone' => '(31)98650197',
						'administrator' => true,
						'status' => true,
				],
		);

		// Uncomment the below to run the seeder
		DB::table ( 'users' )->insert ( $users );
	}
}
