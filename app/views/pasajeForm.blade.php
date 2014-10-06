@extends('layouts.base')

@section('body')

{{ Form::open(array('action' => 'PasajesController@procesaNuevo')) }}
    
    {{ Form::hidden('viatico_id','') }}
    
    {{ Form::label('cubre_pasaje', 'Institución que cubre el costo del pasaje') }}
    {{ Form::text('cubre_pasaje') }}
    
    {{ Form::label('tipo_pasaje', 'Tipo de transporte') }}
    {{ Form::select('tipo_pasaje', array(
        'Terrestre' => 'Terrestre',
        'Aereo' => 'Aéreo'
    )) }}
    
    {{ Form::label('gasto_pasaje', 'Gasto de pasaje') }}
    {{ Form::text('gasto_pasaje') }}
    
{{ Form::close() }}

@stop
