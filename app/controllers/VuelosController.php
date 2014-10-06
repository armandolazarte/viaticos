<?php

class VuelosController extends BaseController
{

	public function nuevo()
	{
		return View::make('vueloForm');
	}
	
	public function procesaNuevo()
	{
	    $vuelo = new Vuelo;
	    $vuelo->viatico_id = Input::get('viatico_id');
	    $vuelo->linea = Input::get('linea');
	    $vuelo->tipo_vuelo = Input::get('tipo_vuelo');
	    $vuelo->origen = Input::get('origen');
	    $vuelo->destino = Input::get('destino');
	    $vuelo->gasto_vuelo = Input::get('gasto_vuelo');
	    
	    $vuelo->save();
	}

}
