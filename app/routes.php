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


	
/*Route::get('/', function()

{

 return View::make('form');

});*/


Route::get('programs/{id}/show','ProgramController@show');

Route::get('programs/search','ProgramController@search');

Route::get('programs/export','ProgramController@export');

Route::get('programs/import_file','ProgramController@selectImportFile');

Route::get('programs/import','ProgramController@import');

Route::resource('programs', 'ProgramController');

Route::get('/prueba', function (){

	return View::make ('prueba');
});


Route::get('/', function (){

	return View::make ('home');
});











