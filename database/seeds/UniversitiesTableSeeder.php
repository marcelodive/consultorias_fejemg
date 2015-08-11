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
				[
						'id' => 3,
						'name' => 'Ibmex',
				],
				[
						'id' => 4,
						'name' => 'Fundação João Pinheiro',
				],
				[
						'id' => 5,
						'name' => 'PUC Minas',
				],
				[
						'id' => 6,
						'name' => 'Universidade Federal dos Vales do Jequitinhonha e Mucuri',
				],
				[
						'id' => 7,
						'name' => 'Universidade Federal de Itajubá',
				],
				[
						'id' => 8,
						'name' => 'Universidade Federal de Ouro Preto',
				],
				[
						'id' => 9,
						'name' => 'Universidade Federal de Juiz de Fora',
				],
				[
						'id' => 10,
						'name' => 'Universidade Federal de Lavras',
				],
				[
						'id' => 11,
						'name' => 'Universidade Federal de Ouro Branco',
				],
				[
						'id' => 12,
						'name' => 'Universidade Federal de São João Del Rey',
				],
		);

		// Uncomment the below to run the seeder
		DB::table ( 'universities' )->insert ( $universities );
	}
}
