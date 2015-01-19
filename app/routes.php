<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function (){

	return View::make ('home/home');
});

Route::get('/academics', function (){

	return View::make ('academics/academics');
});

Route::get('/facilities', function (){

	return View::make ('facilities/facilities');
});


// Programs Routes
Route::get('programs/{id}/show','ProgramController@show');
Route::get('programs/search','ProgramController@search');
Route::get('programs/export','ProgramController@export');
Route::get('programs/import_file','ProgramController@selectImportFile');
Route::post('programs/import','ProgramController@import');
Route::resource('programs', 'ProgramController');





/////////////////////////////////////

Route::get('/pruebas', function (){

	return View::make ('tirar/prueba');
});













