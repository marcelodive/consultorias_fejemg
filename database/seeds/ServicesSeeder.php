<?php
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder {
	public function run() {
		// Uncomment the below to wipe the table clean before populating
		DB::table ( 'services' )->delete ();

		$services = array (
				[
						'id' => 1,
						'name' => 'Desenvolvimento de Website',
						'field_id' => 1
				],
				[
						'id' => 2,
						'name' => 'Desenvolvimento de Sistemas Web',
						'field_id' => 1
				],
				[
						'id' => 6,
						'name' => 'Desenvolvimento de Aplicativos Mobile',
						'field_id' => 1
				],
				[
						'id' => 3,
						'name' => 'Instalações Elétricas',
						'field_id' => 3
				],
				[
						'id' => 4,
						'name' => 'Desenvolvimento de Dispositivos Personalizados',
						'field_id' => 4
				],
				[
						'id' => 5,
						'name' => 'Consultoria em Eficiência Energética',
						'field_id' => 3
				],
				[
						'id' => 7,
						'name' => 'Criação Publicitária',
						'field_id' => 5
				],
				[
						'id' => 8,
						'name' => 'Jornalismo e Redação Publicitária',
						'field_id' => 5
				],
				[
						'id' => 9,
						'name' => 'Planejamento em Comunicação',
						'field_id' => 5
				],
				[
						'id' => 10,
						'name' => 'Consultoria para Montagem de Drogarias',
						'field_id' => 6
				],
				[
						'id' => 11,
						'name' => 'Análise de Formulações Farmacêuticas, Cosméticos e Fitoterápicos',
						'field_id' => 6
				],
				[
						'id' => 12,
						'name' => 'Análise de Perigos e Pontos Críticos de Controle (APPCC) de Alimentos',
						'field_id' => 8
				],
				[
						'id' => 13,
						'name' => 'Rotulagem Nutricional de Alimentos',
						'field_id' => 8
				],
				[
						'id' => 14,
						'name' => 'Consultoria para Atualização de Equipamentos Laboratoriais',
						'field_id' => 6
				],
				[
						'id' => 15,
						'name' => 'Consultoria em Ferramentas de Gestão de Sistemas de Qualidade',
						'field_id' => 6
				],
				[
						'id' => 16,
						'name' => 'Plano de Negócios',
						'field_id' => 8
				],
				[
						'id' => 17,
						'name' => 'Planejamento Estratégico',
						'field_id' => 8
				],
				[
						'id' => 18,
						'name' => 'Plano de Marketing',
						'field_id' => 9
				],
				[
						'id' => 19,
						'name' => 'Plano de Endomarketing',
						'field_id' => 9
				],
				[
						'id' => 20,
						'name' => 'Mapeamento de Processos',
						'field_id' => 8
				],
				[
						'id' => 21,
						'name' => 'Reestruturação Organizacional',
						'field_id' => 8
				],
				[
						'id' => 22,
						'name' => 'Consultoria Financeira',
						'field_id' => 2
				],
				[
						'id' => 23,
						'name' => 'Consultoria em Administração Pública',
						'field_id' => 8
				],
				[
						'id' => 24,
						'name' => 'Otimização de Processos',
						'field_id' => 8
				],
				[
						'id' => 25,
						'name' => 'Reforma Administrativa',
						'field_id' => 8
				],				
				[
						'id' => 26,
						'name' => 'Plano de Cargos e Salários',
						'field_id' => 10
				],
				[
						'id' => 27,
						'name' => 'Pesquisa de Clima Organizacional',
						'field_id' => 10
				],
				
				[
						'id' => 28,
						'name' => 'Desenvolvimento, avaliação e otimização de processos industriais',
						'field_id' => 11
				],
				[
						'id' => 29,
						'name' => 'Análise de Processos de Transferência de Calor e Massa em Linha de Produção',
						'field_id' => 11
				],
				[
						'id' => 30,
						'name' => 'Estudo de Rejeitos Industriais',
						'field_id' => 11
				],
				[
						'id' => 31,
						'name' => 'Engenharia de Alimentos',
						'field_id' => 11
				],
				[
						'id' => 32,
						'name' => 'Adequação das Atividades à Legislação Ambiental Pertinente',
						'field_id' => 11
				],
				[
						'id' => 33,
						'name' => 'Neutralização de Carbono',
						'field_id' => 11
				],
				[
						'id' => 34,
						'name' => 'Síntese e Aplicação de Materiais',
						'field_id' => 11
				],
				
				[
						'id' => 35,
						'name' => 'Desenvolvimento de Equipamento Automatizado',
						'field_id' => 11
				],
				[
						'id' => 36,
						'name' => 'Sistemas Mecânicos',
						'field_id' => 11
				],
				[
						'id' => 37,
						'name' => 'Análise de Viabilidade',
						'field_id' => 11
				],
				[
						'id' => 38,
						'name' => 'Planejamento do Desenvolvimento de Produto',
						'field_id' => 11
				],
				[
						'id' => 45,
						'name' => 'Desenho Técnico',
						'field_id' => 11
				],
				[
						'id' => 39,
						'name' => 'Análise Estrutural',
						'field_id' => 11
				],
				[
						'id' => 42,
						'name' => 'Implantação do Programa 5S',
						'field_id' => 8
				],
				[
						'id' => 44,
						'name' => 'Sistema de Gestão da Qualidade',
						'field_id' => 8
				],
				[
						'id' => 43,
						'name' => 'Planejamento de Layout',
						'field_id' => 12
				],
				[
						'id' => 41,
						'name' => 'Análise de capacidade produtiva',
						'field_id' => 11
				],
				[
						'id' => 46,
						'name' => 'Análise Ergonômica do Trabalho',
						'field_id' => 13
				],

				[
					'id' => 47,
					'name' => 'Pesquisa de Mercado',
					'field_id' => 9
				],
				[
					'id' => 48,
					'name' => 'Plano de Branding',
					'field_id' => 9
				],
				[
					'id' => 49,
					'name' => 'Curso de Gestão e Liderança de Pessoas',
					'field_id' => 14
				],
				[
					'id' => 50,
					'name' => 'Planilha de Precificação de Produtos',
					'field_id' => 8
				],
				[
					'id' => 51,
					'name' => 'Planejamento Financeiro',
					'field_id' => 2
				],

				[
					'id' => 52,
					'name' => 'Processo Seletivo',
					'field_id' => 10
				],
				[
					'id' => 53,
					'name' => 'Diagnóstico Organizacional',
					'field_id' => 10
				],
				
				[
					'id' => 54,
					'name' => 'Consultorias em Estratégia Empresarial',
					'field_id' => 14
				],
				[
					'id' => 55,
					'name' => 'Consultorias em Marketing Empresarial',
					'field_id' => 9
				],
				[
					'id' => 56,
					'name' => 'Estudo de Viabilidade Econômica',
					'field_id' => 2
				],
				[
					'id' => 57,
					'name' => 'Reestruturação Organizacional',
					'field_id' => 10
				],
				
				[
					'id' => 58,
					'name' => 'Arborização Urbana',
					'field_id' => 15
				],
				[
					'id' => 59,
					'name' => 'Autorização para Intervenção Ambiental - AIA',
					'field_id' => 15
				],
				[
					'id' => 60,
					'name' => 'Delimitação de Áreas de Preservação Permanente',
					'field_id' => 15
				],
				[
					'id' => 61,
					'name' => 'Serviços de Geoprocessamento',
					'field_id' => 15
				],
				[
					'id' => 62,
					'name' => 'Análise para Adubação e Correção do Solo',
					'field_id' => 15
				],
				
				[
					'id' => 63,
					'name' => 'Educação Ambiental',
					'field_id' => 15
				],
				
				[
					'id' => 64,
					'name' => 'Consultoria para Realização de Eventos',
					'field_id' => 9
				],
				[
					'id' => 65,
					'name' => 'Implatação do Sistema de Gestão de Qualidade (SGQ)',
					'field_id' => 8
				],
				[
					'id' => 66,
					'name' => 'Desenvolvimento de Software',
					'field_id' => 1
				],
				[
					'id' => 67,
					'name' => 'Automatização Residencial',
					'field_id' => 11
				],
				[
					'id' => 68,
					'name' => 'Projetos Elétricos',
					'field_id' => 11
				],
				
				
				
		);
		
		// Uncomment the below to run the seeder
		DB::table ( 'services' )->insert ( $services );
	}
}



























