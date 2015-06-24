<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
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
					select `fields`.`name` 
					from `fields` 
					inner join `services` on `fields`.`id` = `services`.`field_id` 
					inner join `service_je` on `services`.`id` = `service_je`.`service_id` 
					inner join `junior_enterprises` on `junior_enterprises`.`id` = `service_je`.`je_id` 
					inner join `cities` on `junior_enterprises`.`city_id` = `cities`.`id` 
					where `cities`.`id` = ".$city->city_id.";
					"));
		
			$cities_pack[$city->city_name] = $city_fields;			
		endforeach;
		
		$jsonified = json_encode($cities_pack);
		
		
		return view('pages.consultorias', compact('cities','jsonified'));
	}
	
	public function populateSelectFields($id){
		
		
		return View::make('pages.consultorias', compact('fields'));
	}
	
	/**
	 * Show the result from the query
	 */
	public function result()
	{
		//
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
