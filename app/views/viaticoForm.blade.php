@extends('layout')

@section('tabs')
<ul class="nav nav-tabs" role="tablist">
    <li><a href="/">Inicio</a></li>
    <li class="active"><a href="{{ action('ViaticosController@inicio') }}">Funcionarios</a></li>
    <li><a href="{{ action('ConsultasController@inicio') }}">Ciudadanos</a></li>
    <li><a href="{{ action('AdminController@inicio') }}">Administración</a></li>
</ul>
<ul class="nav nav-pills">
  <li class="active"><a href="{{ action('ViaticosController@nuevo') }}">Nuevo Viático</a></li>
  <li><a href="#">Consultar</a></li>
  <li><a href="#">Editar</a></li>
  <li><a href="#">Formatos</a></li>
</ul>
@stop

@section('content')

{{ Form::open(array(
    'action' => 'ViaticosController@procesaNuevo',
    'role' => 'form')
) }}
{{-- Form::model($viatico, array('route' => array('viaticos.update', $viatico->id), 'action' => 'ViaticosController@procesaNuevo')) --}}
    
    <div class="form-group">
    {{ Form::label('mec_origen', 'Mecanismo de Origen') }}
    {{ Form::select('mec_origen', array(
        'Invitacion' => 'Invitación',
        'RequerimientoUR' => 'Requerimiento de UR'
    )) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('inst_genera', 'Institución que invita') }}
        {{ Form::text('inst_genera','', array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('ur', 'Unidad Responsable que genera comisión') }}
        {{ Form::text('ur','', array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('tipo_rep', 'Tipo de puesto') }}
        {{ Form::select('tipo_rep', array(
            'Tecnico' => 'Técnico',
            'AltoNivel' => 'Alto Nivel'
        )) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('consecutivo', 'Comisión') }}
        {{ Form::text('consecutivo','', array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('nombre', 'Nombre del comisionado') }}
        {{ Form::text('nombre','', array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('cargo', 'Cargo del comisionado') }}
        {{ Form::text('cargo','', array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('grupo', 'Clave del tipo de puesto') }}
        {{ Form::text('grupo','', array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('tipo_viaje', 'Tipo de viaje') }}
        {{ Form::select('tipo_viaje', array(
            'Nacional' => 'Nacional',
            'Internacional' => 'Internacional'
        ), 'Nacional') }}
    </div>
    
    <div class="form-group">
        {{ Form::label('acuerdo', 'Documento de acuerdo') }}
        {{ Form::text('acuerdo','', array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('oficio', 'No. de Of. de comisión') }}
        {{ Form::text('oficio','', array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('fechainicio_com', 'Fecha de inicio de la comisión') }}
        {{ Form::date('fechainicio_com') }}
    </div>
    
    <div class="form-group">
        {{ Form::label('fechafin_com', 'Fecha de fin de la comisión') }}
        {{ Form::date('fechafin_com') }}
    </div>
    
    <div class="form-group">
        {{ Form::label('observaciones', 'Observaciones') }}
        {{ Form::textarea('observaciones','', array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('gasto_alimentacion', 'Gasto en alimentación') }}
        {{ Form::text('gasto_alimentacion','', array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('gasto_viatico', 'Gasto de viáticos') }}
        {{ Form::text('gasto_viatico','', array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('comprobado', 'Monto Comprobado') }}
        {{ Form::text('comprobado','', array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('sin_comprobar', 'Monto Sin Comprobar') }}
        {{ Form::text('sin_comprobar','', array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('viatico_devuelto', 'Monto Devuelto') }}
        {{ Form::text('viatico_devuelto','', array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Aceptar', array('class' => 'btn btn-success')) }}

{{ Form::close() }}

@stop
