<?php
use Illuminate\Database\Seeder;

class JuniorEnterprisesTableSeeder extends Seeder {
	public function run() {
		// Uncomment the below to wipe the table clean before populating
		DB::table ( 'junior_enterprises' )->delete ();
		
		$junior_enterprises = array (
				[ 
						'id' => 1,
						'name' => 'UFMG Informática Jr.',
						'abbreviation' => 'Ijúnior',
						'email' => 'contato@ijunior.com.br',
						'phone' => '(31)3409-5593',
						'website' => 'http://ijunior.com.br/site/',
						'university_id' => 1,
						'city_id' => 1630,
						'image' => 'http://ijunior.com.br/site/img/faixa/logo.png'
				],
				[ 
						'id' => 2,
						'name' => 'UFMG Consultoria Jr.',
						'abbreviation' => 'UCJ',
						'email' => 'contato@ucj.com.br',
						'phone' => '(31)3499-3560',
						'website' => 'http://www.ucj.com.br/site/index.php',
						'university_id' => 1,
						'city_id_id' => 1630,
						'image' => 'http://www.ucj.com.br/site/images/layout/logo.png'
				],
		);
		
		// Uncomment the below to run the seeder
		DB::table ( 'junior_enterprises' )->insert ( $junior_enterprises );
	}
}
