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
				[
					'id' => 69,
					'name' => 'Artes Gráficas',
					'field_id' => 9
				],
				[
					'id' => 70,
					'name' => 'Produção de Textos',
					'field_id' => 5
				],
				[
					'id' => 71,
					'name' => 'Layout para Web',
					'field_id' => 5
				],
				[
					'id' => 72,
					'name' => 'Análise de Saneantes',
					'field_id' => 6
				],
				[
					'id' => 73,
					'name' => 'Projeto Arquitetônico',
					'field_id' => 12
				],
				[
					'id' => 74,
					'name' => 'Design de Interiores',
					'field_id' => 12
				],
				[
					'id' => 75,
					'name' => 'Gerenciamento de Resíduos Sólidos',
					'field_id' => 11
				],
				[
					'id' => 76,
					'name' => 'Licenciamento Ambiental',
					'field_id' => 11
				],
				[
					'id' => 77,
					'name' => 'Processamento de Biomassa',
					'field_id' => 11
				],
				[
					'id' => 78,
					'name' => 'Controle de Poluição',
					'field_id' => 15
				],
				[
					'id' => 79,
					'name' => 'Produção biotecnológica de fármacos e vacinas',
					'field_id' => 6
				],
				[
					'id' => 80,
					'name' => 'Produção de cosméticos',
					'field_id' => 6
				],
				[
					'id' => 81,
					'name' => 'Implantação/manutenção de plantações, florestas e pastagens',
					'field_id' => 16
				],
				[
					'id' => 82,
					'name' => 'Assistência técnica em bovinocultura',
					'field_id' => 16
				],
				[
					'id' => 83,
					'name' => 'Treinamento para operação e manutenção de ETE’s',
					'field_id' => 11
				],
				[
					'id' => 84,
					'name' => 'Sistema de Gestão Ambiental',
					'field_id' => 15
				],
				[
					'id' => 85,
					'name' => 'Pesquisa de Opinião e Satisfação',
					'field_id' => 15
				],
				[
					'id' => 86,
					'name' => 'Controle de Estoque',
					'field_id' => 15
				],
				[
					'id' => 87,
					'name' => 'Levantamento de Fauna e Flora',
					'field_id' => 15
				],
				[
					'id' => 88,
					'name' => 'Coleta e Destinação do Óleo',
					'field_id' => 15
				],
				[
					'id' => 89,
					'name' => 'Desenvolvimento, Otimização e Simulação de Processos',
					'field_id' => 11
				],
				[
					'id' => 90,
					'name' => 'Regulamentação, segurança e boas práticas laboratoriais',
					'field_id' => 13
				],
				[
					'id' => 91,
					'name' => 'Análises químicas e microbiológicas',
					'field_id' => 6
				],
				[
					'id' => 92,
					'name' => 'Engenharia Econômica',
					'field_id' => 11
				],
				[
					'id' => 93,
					'name' => 'Automatização de sistemas através de circuitos hidráulicos e pneumáticos',
					'field_id' => 11
				],
				[
					'id' => 94,
					'name' => 'Planejamento Logístico',
					'field_id' => 17
				],
				[
					'id' => 95,
					'name' => 'Análise de estabilidade e contenção de taludes e encostas',
					'field_id' => 15
				],
				[
					'id' => 96,
					'name' => 'Recuperação de Áreas Degradadas',
					'field_id' => 15
				],
				[
					'id' => 97,
					'name' => 'Aquisição de outorgas para uso de recursos hídricos',
					'field_id' => 15
				],
				[
					'id' => 98,
					'name' => 'Reuso e recirculação das águas',
					'field_id' => 15
				],
				[
					'id' => 99,
					'name' => 'Plano de Coleta Seletiva',
					'field_id' => 15
				],
				[
					'id' => 100,
					'name' => 'Análise de Custo e Preço de Venda',
					'field_id' => 2
				],
				[
					'id' => 101,
					'name' => 'Organização de Eventos',
					'field_id' => 8
				],
				[
					'id' => 102,
					'name' => 'Levantamento Patrimonial',
					'field_id' => 8
				],
				[
					'id' => 103,
					'name' => 'Viabilidade de Negócios',
					'field_id' => 2
				],
				[
					'id' => 104,
					'name' => 'Planejamento e Controle da Produção',
					'field_id' => 11
				],
				[
					'id' => 105,
					'name' => 'Assessoria Contábil',
					'field_id' => 2
				],
				[
					'id' => 106,
					'name' => 'Sistemas Mecânicos',
					'field_id' => 11
				],
				[
					'id' => 107,
					'name' => 'Sistemas Mecatrônicos',
					'field_id' => 11
				],
				[
					'id' => 108,
					'name' => 'Projetos Aeronáuticos',
					'field_id' => 11
				],
				[
					'id' => 109,
					'name' => 'Desenvolvimento e Aperfeiçoamento das Formulações de Produtos',
					'field_id' => 7
				],
				[
					'id' => 110,
					'name' => 'Indicação e Utilização de Métodos de Conservação de Alimentos Industrializados',
					'field_id' => 7
				],
				[
					'id' => 111,
					'name' => 'Testes de Vida de Prateleira',
					'field_id' => 7
				],
				[
					'id' => 112,
					'name' => 'Indicação e Estudo de Embalagens',
					'field_id' => 7
				],
				[
					'id' => 113,
					'name' => 'Implantação do Programa de Boas Práticas de Fabricação (BPF)',
					'field_id' => 7
				],
				[
					'id' => 114,
					'name' => 'Consultoria e assessoria em Eventos Esportivos',
					'field_id' => 18
				],
				[
					'id' => 115,
					'name' => 'Consultoria em Ginástica Laboral',
					'field_id' => 18
				],
				[
					'id' => 116,
					'name' => 'Serviços de arbitragem',
					'field_id' => 18
				],
				[
					'id' => 117,
					'name' => 'Projeto relacionado a academia',
					'field_id' => 18
				],
				[
					'id' => 118,
					'name' => 'Tradução, revisão e formatação de textos',
					'field_id' => 5
				],
				[
					'id' => 119,
					'name' => 'Capacitação em Gestão do Tempo',
					'field_id' => 14
				],
				[
					'id' => 120,
					'name' => 'Capacitação em Português para Negócios',
					'field_id' => 14
				],
				[
					'id' => 121,
					'name' => 'Capacitação em Apresentações',
					'field_id' => 14
				],
				[
					'id' => 122,
					'name' => 'Consultoria Florestal',
					'field_id' => 16
				],
				[
					'id' => 123,
					'name' => 'Produção Florestal',
					'field_id' => 16
				],
				
				
				
		);
		
		// Uncomment the below to run the seeder
		DB::table ( 'services' )->insert ( $services );
	}
}



























