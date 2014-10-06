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

Route::get('/', function()
{
	//return View::make('hello');
	return View::make('inicio');
	
});

//Route::model('vid', 'Viatico');

Route::group(array('prefix' => 'viatico'), function()
{
    Route::get('/inicio', 'ViaticosController@inicio');
    Route::get('/nuevo', 'ViaticosController@nuevo');
    Route::get('/consultar/{vid}', 'ViaticosController@consultar');
    
    Route::post('/nuevo', 'ViaticosController@procesaNuevo');
    
    
    Route::get('/viaje/nuevo', 'ViajesController@nuevo');
    
});

Route::group(array('prefix' => 'consulta'), function()
{
    Route::get('/inicio', 'ConsultasController@inicio');
});

Route::group(array('prefix' => 'admin'), function()
{
    Route::get('/inicio', 'AdminController@inicio');
});

