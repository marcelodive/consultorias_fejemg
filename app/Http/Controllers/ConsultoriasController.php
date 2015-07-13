<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use DB;

class ConsultoriasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cities = DB::table('cities')
					->join('junior_enterprises','cities.id','=','junior_enterprises.city_id')
					->select('*', 'cities.name as city_name', 'cities.id as city_id')
					->groupBy('cities.name')
					->get();
		
		$cities_pack = [];
		
		foreach($cities as $city):
			$city_fields = DB::select(DB::raw("
					select distinct `fields`.`name` 
					from `fields` 
					inner join `services` on `fields`.`id` = `services`.`field_id` 
					inner join `service_je` on `services`.`id` = `service_je`.`service_id` 
					inner join `junior_enterprises` on `junior_enterprises`.`id` = `service_je`.`je_id` 
					inner join `cities` on `junior_enterprises`.`city_id` = `cities`.`id` 
					where `cities`.`id` = ".$city->city_id." ORDER BY `fields`.`name` ASC;
					"));
		
			$cities_pack[$city->city_name] = $city_fields;			
		endforeach;
				
		foreach (array_values($cities_pack) as $city):
		foreach ($city as $fields):
		foreach ($fields as $field):
			$fields_services = DB::select(DB::raw("
					select distinct `services`.`name` 
					from `services` 
					inner join `fields` on `fields`.`id` = `services`.`field_id` 
					inner join `service_je` on `services`.`id` = `service_je`.`service_id` 
					inner join `junior_enterprises` on `junior_enterprises`.`id` = `service_je`.`je_id` 
					inner join `cities` on `junior_enterprises`.`city_id` = `cities`.`id` 
					where `fields`.`name` LIKE '".$field."' ORDER BY `services`.`name` ASC;
					"));	
				
			$fields_pack[$field] = $fields_services;
		endforeach;
		endforeach;
		endforeach;
		
		$jsonifiedCities = json_encode($cities_pack);
		$jsonifiedJEs = json_encode($fields_pack);		
		
		return view('pages.consultorias', compact('cities','jsonifiedCities','jsonifiedJEs'));
	}
	
	public function populateSelectFields($id){		
		return View::make('pages.consultorias', compact('fields'));
	}
	
	/**
	 * Show the result from the query
	 */
	public function result()
	{
		$city = Request::get('city_selected');		
		$field = Request::get('field_selected');	
		$service = Request::get('service_selected');
		
		
		if ($city == "Todas as Cidades") {			
			$result = DB::select(DB::raw("
					select `junior_enterprises`.*, `cities`.`name` as `city_name`
					from `junior_enterprises`
					inner join `service_je` on `junior_enterprises`.`id` = `service_je`.`je_id`
					inner join `services` on `services`.`id` = `service_je`.`service_id`
					inner join `cities` on `junior_enterprises`.`city_id` = `cities`.`id`
					and `services`.`name` LIKE '".$service."'
					;"));			
		} else {
		$result = DB::select(DB::raw("
					select `junior_enterprises`.*, `cities`.`name` as `city_name`
					from `junior_enterprises`
					inner join `service_je` on `junior_enterprises`.`id` = `service_je`.`je_id`
					inner join `services` on `services`.`id` = `service_je`.`service_id`
					inner join `cities` on `junior_enterprises`.`city_id` = `cities`.`id`
					where `cities`.`name` LIKE '".$city."'
					and `services`.`name` LIKE '".$service."'
					;"));
		}
		
  		return view('pages.consultorias.resultado', compact('result','service'));
	}
	

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
