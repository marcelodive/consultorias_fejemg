<?php
use Illuminate\Database\Seeder;

class FieldsTableSeeder extends Seeder {
	public function run() {
		// Uncomment the below to wipe the table clean before populating
		DB::table ( 'fields' )->delete ();

		$fields = array (
				[
						'id' => 1,
						'name' => 'Tecnologia da Informação',
				],
				[
						'id' => 2,
						'name' => 'Economia / Finanças',
				],
				[
						'id' => 3,
						'name' => 'Elétrica',
				],
				[
						'id' => 4,
						'name' => 'Eletrônica',
				],
				[
						'id' => 5,
						'name' => 'Comunicação',
				],
				[
						'id' => 6,
						'name' => 'Farmácia',
				],
				[
						'id' => 7,
						'name' => 'Nutrição',
				],
				[
						'id' => 8,
						'name' => 'Administração',
				],
				[
						'id' => 9,
						'name' => 'Marketing',
				],
				[
						'id' => 10,
						'name' => 'Recursos Humanos',
				],
				[
						'id' => 11,
						'name' => 'Engenharia',
				],
				[
						'id' => 12,
						'name' => 'Arquitetura',
				],
				[
						'id' => 13,
						'name' => 'Saúde',
				],
				[
						'id' => 14,
						'name' => 'Empreendedorismo',
				],
				[
						'id' => 15,
						'name' => 'Ambiente',
				],
				[
						'id' => 16,
						'name' => 'Agricultura',
				],
				[
						'id' => 17,
						'name' => 'Logística',
				],
				[
						'id' => 18,
						'name' => 'Educação Física',
				],
		);
		
		// Uncomment the below to run the seeder
		DB::table ( 'fields' )->insert ( $fields );
	}
}
