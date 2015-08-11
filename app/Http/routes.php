<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\JuniorEnterprise;
use App\City;
use App\Field;
use App\ServiceEj;
//use DB;

Route::get('consultorias', 'ConsultoriasController@index');

Route::post('consultorias', 'ConsultoriasController@result');

Route::get('consultorias/resultado','ConsultoriasController@index');

Route::get('consultorias/usuario/inscricao', 'UserController@create');

Route::post('consultorias/usuario/inscricao', 'UserController@store');

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
	/**
	 * Populando services.
	 */
Route::get('consultorias/{city}/{field}', function($city,$field){		
			//Lista de serviçoes.
			$EJs_id = array();
			$city_id = null;
			$field_id = null;
			$JuniorEnterprises = null;
			//Id da cidade
			if ($city == "Todas as Cidades"){
				echo "Sem cidade.";
				$JuniorEnterprises = JuniorEnterprise::get();

			}else{
				//Ida da cidade.
				$city_id = City::get()
				->where("name",$city)->first()->id;

				//Ejs da cidade
				$JuniorEnterprises = JuniorEnterprise::get()
				->where("city_id",$city_id);

			}
			//Lista Id das ejs por cidade.	
			foreach ($JuniorEnterprises as $EJ){
				array_push($EJs_id, $EJ->id);
			}

			//Serviços
			if ($field == "Todos os Ramos"){
				$fields_services = \DB::table('service_je')
				->whereIn('je_id',$EJs_id)
				->join('services','service_je.service_id', '=', 'services.id')
				->select('name')->distinct()
				->get();

			}else{
				$field_id = Field::get()
				->where("name",$field)->first()->id;
				global $field; //gambiarra
				$field = $field_id; //gambiarra
				//Buscas serviços
				$fields_services = \DB::table('service_je')
				->whereIn('je_id',$EJs_id)
				->join('services',function($join){
					global $field;
            		$join->on('service_je.service_id', '=', 'services.id')
                 	->where('services.field_id', "=", $field);
       			 })
				->select('name')->distinct()
				->get();
		
			}

		$lists= array();
		global $lists;
		//$lists = "<option value=\"Todos os Serviços\">Todos os Serviços</option>";
		foreach ($fields_services as $service) {
			$lists = $lists ."<option value=\"". $service->name ."\">".$service->name ."</option>";
		}
		return $lists;
	});

Route::controllers([
	'auth' 		=> 'Auth\AuthController',
	'password' 	=> 'Auth\PasswordController',
]);
