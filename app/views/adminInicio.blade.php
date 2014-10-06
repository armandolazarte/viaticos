@extends('layout')

@section('tabs')
<ul class="nav nav-tabs" role="tablist">
    <li><a href="/">Inicio</a></li>
    <li><a href="{{ action('ViaticosController@inicio') }}">Funcionarios</a></li>
    <li><a href="{{ action('ConsultasController@inicio') }}">Ciudadanos</a></li>
    <li class="active"><a href="{{ action('AdminController@inicio') }}">Administración</a></li>
</ul>
<ul class="nav nav-pills">
  <li><a href="#">Usuarios</a></li>
  <li><a href="#">Funcionarios</a></li>
  <li><a href="#">Dependencias</a></li>
</ul>
@stop

@section('content')
    <div class="page-header">
        <h1>Módulo de Administración del Sistema</h1>
    </div>
@stop