@extends('layout')

@section('tabs')
<ul class="nav nav-tabs" role="tablist">
    <li><a href="/">Inicio</a></li>
    <li class="active"><a href="{{ action('ViaticosController@inicio') }}">Funcionarios</a></li>
    <li><a href="{{ action('ConsultasController@inicio') }}">Ciudadanos</a></li>
    <li><a href="{{ action('AdminController@inicio') }}">Administración</a></li>
</ul>
<ul class="nav nav-pills">
  <li><a href="{{ action('ViaticosController@nuevo') }}">Nuevo Viático</a></li>
  <li><a href="#">Consultar</a></li>
  <li><a href="#">Editar</a></li>
</ul>
@stop

@section('content')
    <div class="page-header">
        <h1>Módulo para Funcionarios</h1>
    </div>
    
    <div class="panel panel-info">
        <div class="panel-heading">Viáticos</div>
        <div class="panel-body">
        Consultar viáticos del funcionario indicando el grado de información completada
        </div>
    </div>
@stop