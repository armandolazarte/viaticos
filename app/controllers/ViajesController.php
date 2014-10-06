<?php

class ViajesController extends BaseController
{

	public function nuevo()
	{
	    //FormularioNuevo
		return View::make('viajeForm');
	}
	
	public function procesaNuevo()
	{
	    $viaje = new Viaje;
	    $viaje->viatico_id = Input::get('viatico_id');
	    $viaje->pais_origen = Input::get('pais_origen');
	    $viaje->estado_origen = Input::get('estado_origen');
	    $viaje->ciudad_origen = Input::get('ciudad_origen');
	    $viaje->pais_destino = Input::get('pais_destino');
	    $viaje->estado_destino = Input::get('estado_destino');
	    $viaje->ciudad_destino = Input::get('ciudad_destino');
	    $viaje->tarifa_diaria = Input::get('tarifa_diaria');
	    $viaje->moneda = Input::get('moneda');

	    $viaje->save();
	}

}
