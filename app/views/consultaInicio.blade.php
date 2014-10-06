@extends('layout')

@section('tabs')
<ul class="nav nav-tabs" role="tablist">
    <li><a href="/">Inicio</a></li>
    <li><a href="{{ action('ViaticosController@inicio') }}">Funcionarios</a></li>
    <li class="active"><a href="{{ action('ConsultasController@inicio') }}">Ciudadanos</a></li>
    <li><a href="{{ action('AdminController@inicio') }}">Administración</a></li>
</ul>
<ul class="nav nav-pills">
  <li class="active"><a href="#">Consultar</a></li>
  <li><a href="#">Seguimiento</a></li>
</ul>
@stop

@section('content')
    <div class="page-header">
        <h1>Módulo para Ciudadanos</h1>
    </div>
    
    <div class="panel panel-info">
        <div class="panel-heading">Consultar por Funcionario</div>
        <div class="panel-body">
        
        </div>
    </div>
    <div class="panel panel-info">
        <div class="panel-heading">Consultar por Dependencia</div>
        <div class="panel-body">
        
        </div>
    </div>
    <div class="panel panel-info">
        <div class="panel-heading">Consultar por Destino</div>
        <div class="panel-body">
        
        </div>
    </div>
    <div class="panel panel-info">
        <div class="panel-heading">Consultar por Fechas</div>
        <div class="panel-body">
        
        </div>
    </div>
@stop