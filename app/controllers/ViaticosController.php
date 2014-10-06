<?php

class ViaticosController extends BaseController
{
	public function inicio()
	{
		return View::make('viaticoInici');
	}
	
	public function nuevo()
	{
	    //FormularioNuevo
		return View::make('viaticoForm');
	}
	
	public function procesaNuevo()
	{
	    $viatico = new Viatico;
	    $viatico->mec_origen = Input::get('mec_origen');
	    $viatico->inst_genera = Input::get('inst_genera');
	    $viatico->ur = Input::get('ur');
	    $viatico->tipo_rep = Input::get('tipo_rep');
	    $viatico->consecutivo = Input::get('consecutivo');
	    $viatico->nombre = Input::get('nombre');
	    $viatico->cargo = Input::get('cargo');
	    $viatico->grupo = Input::get('grupo');
	    $viatico->tipo_viaje = Input::get('tipo_viaje');
	    $viatico->acuerdo = Input::get('acuerdo');
	    $viatico->oficio = Input::get('oficio');
	    $viatico->fechainicio_com = Input::get('fechainicio_com');
	    $viatico->fechafin_com = Input::get('fechafin_com');
	    $viatico->observaciones = Input::get('observaciones');
	    
	    $viatico->gasto_alimentacion = Input::get('gasto_alimentacion');
	    $viatico->gasto_viatico = Input::get('gasto_viatico');
	    $viatico->comprobado = Input::get('comprobado');
	    $viatico->sin_comprobar = Input::get('sin_comprobar');
	    $viatico->viatico_devuelto = Input::get('viatico_devuelto');
	    
	    $viatico->save();
	    
	    return Redirect::action('ViaticosController@consultar', array('vid' => $viatico->id));
	}
	
	public function consultar($vid)
	{
		$viatico = Viatico::find($vid);
		$viaje = array();
		$evento = array();
		$antecedente = array();
		$pasaje = array();
		$vuelo = array();
		$hospedaje = array();
		$data['viatico'] = $viatico;
		$data['viaje'] = $viaje;
		$data['evento'] = $evento;
		$data['antecedente'] = $antecedente;
		$data['pasaje'] = $pasaje;
		$data['vuelo'] = $vuelo;
		$data['hospedaje'] = $hospedaje;
		
		return View::make('viaticoConsultar', $data);
	}
}
