<?php

class AntecedentesController extends BaseController
{

	public function nuevo()
	{
	    //FormularioNuevo
		return View::make('antecedenteForm');
	}
	
	public function procesaNuevo()
	{
	    $antecedente = new Antecedente;
	    $antecedente->viatico_id = Input::get('viatico_id');
	    $antecedente->motivo = Input::get('motivo');
	    $antecedente->antecedente = Input::get('antecedente');
	    $antecedente->actividad = Input::get('actividad');
	    $antecedente->resultado = Input::get('resultado');
	    $antecedente->contribucion = Input::get('contribucion');
	    $antecedente->url_comunicado = Input::get('url_comunicado');
	    
	    $antecedente->save();
	}

}
