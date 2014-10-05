<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablasViaticos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('urs', function($t)
		{
			$t->increments('id');
			$t->string('ur_code', 50);
			$t->string('ur');
			$t->timestamps();
		});
		
		Schema::create('viaticos', function($t)
		{
			$t->increments('id');
			$t->string('mec_origen'); //Origen de la comisión (Invitación/Unidad Responsable)
			$t->string('inst_genera'); //Quien invita
			$t->string('ur'); //UR que genera comisión
			$t->string('tipo_rep', 50); //Tipo de puesto (Tecnico/Alto Nivel)
			$t->string('consecutivo', 50)->unique(); //No. de comisión
			$t->string('nombre'); //Servidor público comisionado
			$t->string('cargo'); //Cargo asociado al servidor público (Importar de tabla __usuarios__ / __funcionarios__)
			$t->string('grupo', 20); //Clave IFAI tipo de puesto (Importar de __usuarios__ / __funcionarios__)
			$t->string('tipo_viaje', 20); //(Nacional/Internacional)
			$t->string('acuerdo'); //Acuedo o documento de acuedo (**Cargar Archivo**)
			$t->string('oficio'); //No. Of. comisión
			$t->date('fechainicio_com');
			$t->date('fechafin_com');
			$t->text('observaciones');
			
			$t->decimal('gasto_alimentacion');
			$t->decimal('gasto_viatico'); //$ != pasajes (hospedaje, alimentacion
			$t->decimal('comprobado');
			$t->decimal('sin_comprobar');
			$t->decimal('viatico_devuelto');
			
			$t->timestamps();
		});
		
		Schema::create('viajes', function($t)
		{
			$t->increments('id');
			$t->integer('viatico_id')->unsigned();
			$t->string('pais_origen');
			$t->string('estado_origen');
			$t->string('ciudad_origen');
			$t->string('pais_destino');
			$t->string('estado_destino');
			$t->string('ciudad_destino');
			$t->decimal('tarifa_diaria'); //Tafifa viáticos por día (verificar si existe catálogo -> copiar de catálogo)
			$t->string('moneda', 10); //Seleccionar (MXP/USD)
			
			$t->timestamps();
		});
		
		Schema::create('eventos', function($t)
		{
			$t->increments('id');
			$t->integer('viatico_id')->unsigned();
			$t->string('tema'); //Existe un mini catálogo de temas a elegir
			$t->string('tipo_comision'); //Tipo de comisión
			$t->string('evento'); //Nombre del evento
			$t->string('url_evento');
			$t->date('fechainicio_part'); //Fecha inicio de participación
			$t->date('fechafin_part');
			
			$t->timestamps();
		});
		
		Schema::create('antecedentes', function($t)
		{
			$t->increments('id');
			$t->integer('viatico_id')->unsigned();
			$t->text('motivo'); //Motivo de participación
			$t->text('antecedente');
			$t->text('actividad'); //Desc. de actividades
			$t->text('resultado');
			$t->text('contribucion'); //Se elimina _ifai de variable por compatibilidad
			$t->string('url_comunicado'); //Vinculación a nota, blog o comunicado oficial
			
			$t->timestamps();
		});
		
		Schema::create('pasajes', function($t)
		{
			$t->increments('id');
			$t->integer('viatico_id')->unsigned();
			$t->string('cubre_pasaje'); //Institución que cubre pasaje (IFAI/x)
			$t->string('tipo_pasaje', 20); //(Terrestre/Aereo)
			$t->decimal('gasto_pasaje'); //$ pasajes
			
			$t->timestamps();
		});
		
		Schema::create('vuelos', function($t)
		{
			$t->increments('id');
			$t->integer('viatico_id')->unsigned();
			$t->string('linea');
			$t->string('vuelo', 50);
			$t->string('tipo_vuelo', 50); //Origen/Regreso
			$t->string('origen');
			$t->string('destino');
			$t->decimal('gasto_vuelo'); //$ pasajes
			
			$t->timestamps();
		});
		
		Schema::create('hospedajes', function($t)
		{
			$t->increments('id');
			$t->integer('viatico_id')->unsigned();
			$t->string('inst_hospedaje'); //Institución que cubre hospedaje (IFAI/x)
			$t->string('hotel');
			$t->date('fechainicio_hotel');
			$t->date('fechafin_hotel');
			$t->decimal('gasto_hotel');
			
			$t->timestamps();
		});
		
		Schema::create('temas', function($t)
		{
			$t->increments('id');
			$t->string('tema');
		});
		
		Schema::create('tipo_comisiones', function($t)
		{
			$t->increments('id');
			$t->string('tipo_comision');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('urs');
		Schema::drop('viaticos');
		Schema::drop('viajes');
		Schema::drop('eventos');
		Schema::drop('antecedentes');
		Schema::drop('pasajes');
		Schema::drop('vuelos');
		Schema::drop('hospedajes');
		Schema::drop('temas');
		Schema::drop('tipo_comisiones');
	}

}
