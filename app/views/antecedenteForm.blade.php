@extends('layouts.base')

@section('body')

{{ Form::open(array('action' => 'AntecedentesController@procesaNuevo')) }}
    
    {{ Form::hidden('viatico_id','') }}
    
    {{ Form::label('motivo', 'Motivo de la participación') }}
    {{ Form::textarea('motivo') }}
    
    {{ Form::label('antecedente', 'Antecedentes') }}
    {{ Form::textarea('antecedente') }}
    
    {{ Form::label('actividad', 'Descripción de actividades') }}
    {{ Form::textarea('actividad') }}
    
    {{ Form::label('resultado', 'Resultados') }}
    {{ Form::textarea('resultado') }}
    
    {{ Form::label('contribucion', 'Contribución') }}
    {{ Form::textarea('contribucion') }}
    
    {{ Form::label('url_comunicado', 'Pagina web a comunicado, nota o blog oficial') }}
    {{ Form::text('url_comunicado') }}
    
{{ Form::close() }}

@stop
