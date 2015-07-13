<?php
use Illuminate\Database\Seeder;

class JuniorEnterprisesTableSeeder extends Seeder {
	public function run() {
		// Uncomment the below to wipe the table clean before populating
		DB::table ( 'junior_enterprises' )->delete ();
		
		$junior_enterprises = array (
				//No futuro, se pá, isso não vai funfar:
				[ 
						'id' => 51,
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
						'id' => 42,
						'name' => 'UFMG Consultoria Jr.',
						'abbreviation' => 'UCJ',
						'email' => 'contato@ucj.com.br',
						'phone' => '(31)3499-3560',
						'website' => 'http://www.ucj.com.br/site/index.php',
						'university_id' => 1,
						'city_id_id' => 1630,
						'image' => 'http://www.ucj.com.br/site/images/layout/logo.png'
				],
				[ 
						'id' => 50,
						'name' => 'No Bugs',
						'abbreviation' => 'No Bugs',
						'email' => 'contato@nobugs.com.br',
						'phone' => '(31)3899-1792',
						'website' => 'http://nobugs.com.br/site/',
						'university_id' => 2,
						'city_id_id' => 2409,
						'image' => 'http://goo.gl/aMqy3f'
				],
				[ 
						'id' => 1,
						'name' => 'Agregar',
						'abbreviation' => 'Agregar',
						'email' => 'agregarjr@yahoo.com.br',
						'phone' => '(31)3899-2218',
						'website' => 'http://www.agregar.ufv.br/',
						'university_id' => 2,
						'city_id_id' => 202,
						'image' => 'public/images/logo/where.png'
				],
		);
		
		// Uncomment the below to run the seeder
		DB::table ( 'junior_enterprises' )->insert ( $junior_enterprises );
	}
}
