@extends('layouts.base')

@section('body')

{{ Form::open(array('action' => 'EventosController@procesaNuevo')) }}
    
    {{ Form::hidden('viatico_id','') }}
    
    {{ Form::label('linea', 'Línea aérea') }}
    {{ Form::text('linea') }}
    
    {{ Form::label('vuelo', 'Número de vuelo') }}
    {{ Form::text('vuelo') }}
    
    {{ Form::label('tipo_vuelo', '') }}
    {{ Form::select('tipo_vuelo', array(
        'Origen' => 'Origen',
        'Regreso' => 'Regreso'
    )) }}
    
    {{ Form::label('origen', '') }}
    {{ Form::text('origen') }}
    
    {{ Form::label('destino', '') }}
    {{ Form::text('destino') }}
    
    {{ Form::label('gasto_vuelo', '') }}
    {{ Form::text('gasto_vuelo') }}
    
{{ Form::close() }}

@stop
