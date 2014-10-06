<?php

class PasajesController extends BaseController
{

	public function nuevo()
	{
	    //FormularioNuevo
		return View::make('pasajeForm');
	}
	
	public function procesaNuevo()
	{
	    $pasaje = new Pasaje;
	    $pasaje->viatico_id = Input::get('viatico_id');
	    $pasaje->cubre_pasaje = Input::get('cubre_pasaje');
	    $pasaje->tipo_pasaje = Input::get('tipo_pasaje');
	    $pasaje->gasto_pasaje = Input::get('gasto_pasaje');
	    
	    $pasaje->save();
	}

}
