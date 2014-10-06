@extends('layouts.base')

@section('body')

{{ Form::open(array('action' => 'HospedajesController@procesaNuevo')) }}
    
    {{ Form::hidden('viatico_id','') }}
    
    {{ Form::label('inst_hospedaje', 'Institución que cubre el costo del hospedaje') }}
    {{ Form::text('inst_hospedaje') }}
    
    {{ Form::label('hotel', 'Nombre del Hotel') }}
    {{ Form::text('hotel') }}
    
    {{ Form::label('fechainicio_hotel', 'Fecha de Entrada') }}
    {{ Form::date('fechainicio_hotel') }}
    
    {{ Form::label('fechafin_hotel', 'Fecha de Salida') }}
    {{ Form::date('fechafin_hotel') }}
    
    {{ Form::label('costo_hotel', 'Costo del hotel') }}
    {{ Form::text('costo_hotel') }}
    
{{ Form::close() }}

@stop
