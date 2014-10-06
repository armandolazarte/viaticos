@extends('layouts.base')

@section('body')

{{ Form::open(array('action' => 'EventosController@procesaNuevo')) }}
    
    {{ Form::hidden('viatico_id','') }}
    
    {{ Form::label('tema', 'Tema') }}
    
    {{ Form::label('tipo_comision', 'Tipo de comisión') }}
    
    
    {{ Form::label('evento', 'Nombre del evento') }}
    {{ Form::text('evento') }}
    
    {{ Form::label('url_evento', 'Página web del evento') }}
    {{ Form::text('url_evento') }}
    
    {{ Form::label('fechainicio_part', 'Fecha de inicio de participación') }}
    {{ Form::date('fechainicio_part') }}
    
    {{ Form::label('fechafin_part', 'Fecha de fin de participación') }}
    {{ Form::date('fechafin_part') }}
    
{{ Form::close() }}

@stop
