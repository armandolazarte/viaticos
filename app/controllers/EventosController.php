<?php

class EventosController extends BaseController
{

	public function nuevo()
	{
	    //FormularioNuevo
		return View::make('eventoForm');
	}
	
	public function procesaNuevo()
	{
	    $evento = new Evento;
	    $evento->viatico_id = Input::get('viatico_id');
	    $evento->tema = Input::get('tema');
	    $evento->tipo_comision = Input::get('tipo_comision');
	    $evento->evento = Input::get('evento');
	    $evento->url_evento = Input::get('url_evento');
	    $evento->fechainicio_part = Input::get('fechainicio_part');
	    $evento->fechafin_part = Input::get('fechafin_part');
	    
	    $evento->save();
	}

}
$evento-> = Input::get('');