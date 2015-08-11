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
						'id' => 50,
						'name' => 'No Bugs',
						'abbreviation' => 'No Bugs',
						'email' => 'contato@nobugs.com.br',
						'phone' => '(31)3899-1792',
						'website' => 'http://nobugs.com.br/site/',
						'university_id' => 2,
						'city_id' => 2409,
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
						'city_id' => 202,
						'image' => 'public/images/logo/where.png'
				],
				[ 
						'id' => 2,
						'name' => 'Consultoria e Projetos Elétricos Júnior',
						'abbreviation' => 'CPE Jr.',
						'email' => 'contato@cpejr.com.br',
						'phone' => '(31)3409-6695',
						'website' => 'www.cpejr.com.br',
						'university_id' => 1,
						'city_id' => 1630,
						'image' => 'http://cpejr.com.br/rosto/logo.png'
				],
				[ 
						'id' => 3,
						'name' => 'CRIA UFMG Comunicação Júnior',
						'abbreviation' => 'CRIA',
						'email' => 'cria@criaufmg.com.br',
						'phone' => '(31)3409-6315',
						'website' => 'http://www.criaufmg.com.br/',
						'university_id' => 1,
						'city_id' => 1630,
						'image' => 'http://ijunior.com.br/site/img/parceiros/parceiro1.jpg'
				],
				[ 
						'id' => 4,
						'name' => 'Farmácia Jr. Consultoria UFMG',
						'abbreviation' => 'Farmácia Jr.',
						'email' => 'farmaciajr@farmacia.ufmg.br',
						'phone' => '(31)3409-6837',
						'website' => 'http://www.farmaciajr.com.br/',
						'university_id' => 1,
						'city_id' => 1630,
						'image' => 'http://www.ufmg.br/online/arquivos/anexos/farmacia_jr-thumb.JPG'
				],
				[ 
						'id' => 5,
						'name' => 'Ibmex',
						'abbreviation' => 'Ibmex',
						'email' => 'atendimento@ibmex.com.br',
						'phone' => '(31)3247-5778',
						'website' => 'http://ibmex.com.br/',
						'university_id' => 3,
						'city_id' => 1630,
						'image' => 'https://media.licdn.com/mpr/mpr/shrink_100_100/p/1/000/057/2d9/166da7d.png'
				],
				[ 
						'id' => 6,
						'name' => 'João Pinheiro Jr.',
						'abbreviation' => 'João Pinheiro Jr.',
						'email' => 'contato@jpjunior.com.br',
						'phone' => '(31)3448-9526',
						'website' => 'http://www.jpjunior.com.br/',
						'university_id' => 4,
						'city_id' => 1630,
						'image' => 'http://jpjunior.com.br/wp-content/uploads/2014/07/logo.png'
				],
				[ 
						'id' => 7,
						'name' => 'Mult Jr. - Consultorias em Projetos',
						'abbreviation' => 'Mult Jr.',
						'email' => 'multjr@multjr.com.br',
						'phone' => '(31)3409-3695',
						'website' => 'http://www.multjr.com.br/',
						'university_id' => 1,
						'city_id' => 1630,
						'image' => 'http://www.namp.com.br/imagens/mult-jr-logomarca-small.jpg'
				],
				[ 
						'id' => 8,
						'name' => 'PJ UFMG - Consultoria & Assessoria',
						'abbreviation' => 'PJ',
						'email' => 'marketing@producaojunior.com.br',
						'phone' => '(31)3409-4809',
						'website' => 'http://www.pjufmg.com.br/',
						'university_id' => 1,
						'city_id' => 1630,
						'image' => 'http://pjufmg.com.br/wp-content/uploads/2015/06/logo-pjufmg.png'
				],
				[ 
						'id' => 9,
						'name' => 'PUC Consultoria Jr.',
						'abbreviation' => 'Puc Jr.',
						'email' => 'contato@pucconsultoriajr.com.br',
						'phone' => '(31)3319-4251',
						'website' => 'http://www.pucconsultoriajr.com.br/',
						'university_id' => 5,
						'city_id' => 1630,
						'image' => 'http://www.pucconsultoriajr.com.br/wp-content/uploads/2014/02/Logo-PCJ-Site-150x119.png'
				],
				[ 
						'id' => 10,
						'name' => 'RH Consultoria Jr.',
						'abbreviation' => 'RH Jr.',
						'email' => 'contato@rhjr.com.br',
						'phone' => '(31)3409-6316',
						'website' => 'http://www.rhjr.com.br/',
						'university_id' => 1,
						'city_id' => 1630,
						'image' => 'http://www.pucconsultoriajr.com.br/wp-content/uploads/2014/02/Logo-PCJ-Site-150x119.png'
				],
				[ 
						'id' => 11,
						'name' => 'UCJ - UFMG Consultoria Júnior.',
						'abbreviation' => 'UCJ',
						'email' => 'ucj@ucj.com.br',
						'phone' => '(31)3499-3560',
						'website' => 'http://www.ucj.com.br/site/',
						'university_id' => 1,
						'city_id' => 1630,
						'image' => 'https://alertsequalificacao.files.wordpress.com/2011/01/ucj.jpg'
				],
				[ 
						'id' => 12,
						'name' => 'Arbórea Florestal Jr.',
						'abbreviation' => 'Arbórea',
						'email' => 'arboreaflorestal@hotmail.com',
						'phone' => '(38)3532-6922',
						'website' => ' ',
						'university_id' => 6,
						'city_id' => 1805,
						'image' => 'https://goo.gl/9Bzrf1'
				],
				[ 
						'id' => 13,
						'name' => 'Up Consultoria Jr.',
						'abbreviation' => 'Arbórea',
						'email' => 'contato@upconsultoriajr.com.br',
						'phone' => '(31)3839-0863',
						'website' => 'http://upconsultoriajr.com.br/',
						'university_id' => 7,
						'city_id' => 1925,
						'image' => 'http://www.unifeijr.com.br/wp-content/uploads/2014/12/template-prj-site15.png'
				],
				[ 
						'id' => 14,
						'name' => 'UNIFEI Jr.',
						'abbreviation' => 'UNIFEI Jr.',
						'email' => 'contato@unifejr.com.br',
						'phone' => '(35)3629-1640',
						'website' => 'www.unifeijr.com.br',
						'university_id' => 7,
						'city_id' => 1925,
						'image' => 'http://www.unifeijr.com.br/site/wp-content/uploads/2013/09/template-prj-site1.png'
				],
				[ 
						'id' => 15,
						'name' => 'Inova Consultoria Jr.',
						'abbreviation' => 'Inova',
						'email' => 'contato@inovaconsultoriajr.com.br',
						'phone' => '(31)3852-8853',
						'website' => 'http://www.inovaconsultoriajr.com.br/novo_site/',
						'university_id' => 8,
						'city_id' => 1975,
						'image' => 'http://www.unifeijr.com.br/site/wp-content/uploads/2013/09/template-prj-site1.png'
				],
				[ 
						'id' => 16,
						'name' => 'Apsi',
						'abbreviation' => 'Apsi',
						'email' => 'contato@apsiconsultoriajr.com.br',
						'phone' => '(32)2102-3190',
						'website' => 'http://www.ufjf.br/apsi/',
						'university_id' => 9,
						'city_id' => 1983,
						'image' => 'http://www.ufjf.br/wp-content/plugins/bannersnovo/arquivos/apsi/1.jpg'
				],
				[ 
						'id' => 17,
						'name' => 'UFLA Jr.',
						'abbreviation' => 'UFLA Jr.',
						'email' => 'ufla_junior@yahoo.com.br',
						'phone' => '(35)8861-9832',
						'website' => 'http://www.uflajr.com.br/',
						'university_id' => 10,
						'city_id' => 2000,
						'image' => 'http://www.ufla.br/ascom/wp-content/uploads/2012/03/ufla-junior.jpg'
				],
				[ 
						'id' => 18,
						'name' => 'Tristate Jr.',
						'abbreviation' => 'Tristate',
						'email' => 'tristate@ufsj.edu.br',
						'phone' => '(31)7306-5364',
						'website' => 'http://www.tristatejr.com/',
						'university_id' => 11,
						'city_id' => 2102,
						'image' => 'http://tristatejr.com/wp-content/uploads/2014/03/bannersite.png'
				],
				[ 
						'id' => 19,
						'name' => 'Linked Informática Jr.',
						'abbreviation' => 'Linked',
						'email' => 'contato@linkedej.com.br',
						'phone' => '(32)3373-3985',
						'website' => 'www.linkedej.com.br',
						'university_id' => 12,
						'city_id' => 2295,
						'image' => 'http://www.linkedej.com.br/site/images/linked.png'
				],
		);
		
		// Uncomment the below to run the seeder
		DB::table ( 'junior_enterprises' )->insert ( $junior_enterprises );
	}
}
