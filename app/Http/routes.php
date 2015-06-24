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

Route::get('consultorias', 'ConsultoriasController@index');
Route::post('consultorias', 'ConsultoriasController@result');

Route::get('consultorias/resultado','ConsultoriasController@index');

Route::get('consultorias/usuario/inscricao', 'UserController@create');

Route::post('consultorias/usuario/inscricao', 'UserController@store');

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' 		=> 'Auth\AuthController',
	'password' 	=> 'Auth\PasswordController',
]);
