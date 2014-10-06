@extends('layouts.base')

@section('body')

{{ Form::open(array('action' => 'ViajesController@procesaNuevo')) }}
    
    {{ Form::hidden('viatico_id','') }}
    
    {{ Form::label('pais_origen', 'País de origen') }}
    {{ Form::text('pais_origen', 'México') }}
    
    {{ Form::label('estado_origen', 'Estado de origen') }}
    {{ Form::text('estado_origen'), '' }}
    
    {{ Form::label('ciudad_origen', 'Ciudad de origen') }}
    {{ Form::text('ciudad_origen', '') }}
    
    {{ Form::label('pais_destino', 'País destino') }}
    {{ Form::text('pais_destino') }}
    
    {{ Form::label('estado_destino', 'Estado destino') }}
    {{ Form::text('estado_destino') }}
    
    {{ Form::label('ciudad_destino', 'Ciudad destino') }}
    {{ Form::text('ciudad_destino') }}
    
    {{ Form::label('tarifa_diaria', 'Tarifa de viáticos por día') }}
    {{ Form::text('tarifa_diaria') }}
    
    {{ Form::label('moneda', '') }}
    {{ Form::select('moneda', array(
        'MXP' => 'Pesos (Mx)',
        'USD' => 'Dolares',
        'EUR' => 'Euros'
    ), 'MXP') }}
    
{{ Form::close() }}

@stop
