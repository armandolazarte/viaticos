<?php

class HospedajesController extends BaseController
{

	public function nuevo()
	{
	    //FormularioNuevo
		return View::make('hospedajeForm');
	}
	
	public function procesaNuevo()
	{
	    $hospedaje = new Hospedaje;
	    $hospedaje->viatico_id = Input::get('viatico_id');
	    $hospedaje->inst_hospedaje = Input::get('inst_hospedaje');
	    $hospedaje->hotel = Input::get('hotel');
	    $hospedaje->fechainicio_hotel = Input::get('fechainicio_hotel');
	    $hospedaje->fechafin_hotel = Input::get('fechafin_hotel');
	    $hospedaje->costo_hotel = Input::get('costo_hotel');
	    
	    $hospedaje->save();
	}

}
