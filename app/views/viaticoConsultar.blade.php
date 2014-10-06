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
  <li class="active"><a href="{{ action('ViaticosController@nuevo') }}">Consultar</a></li>
  <li><a href="#">Editar</a></li>
  <li><a href="#">Formatos</a></li>
</ul>
@stop

@section('content')
    <div class="page-header">
        <h1>Módulo para Funcionarios</h1>
    </div>
    
    <div class="panel panel-info">
        <div class="panel-heading">Viático</div>
        <div class="panel-body">
        
        @if ( count($viatico) == 0 )
            No hay información
        @else
            <table class="table table-hover">
                <tr>
                    <td>Mecanismo de origen</td>
                    <td>{{ $viatico->mec_origen }}</td>
                </tr>
                <tr>
                    <td>Institución que invita</td><td>{{ $viatico->inst_genera }}</td>
                </tr>
                <tr>
                    <td>Unidad Responsable que genera comisión</td><td>{{ $viatico->ur }}</td>
                </tr>
                <tr>
                    <td>Tipo de puesto</td><td>{{ $viatico->tipo_rep }}</td>
                </tr>
                <tr>
                    <td>Comisión</td><td>{{ $viatico->consecutivo }}</td>
                </tr>
                <tr>
                    <td>Nombre del comisionado</td><td>{{ $viatico->nombre }}</td>
                </tr>
                <tr>
                    <td>Cargo del comisionado</td><td>{{ $viatico->cargo }}</td>
                </tr>
                <tr>
                    <td>Clave del tipo de puesto</td><td>{{ $viatico->grupo }}</td>
                </tr>
                <tr>
                    <td>Tipo de viaje</td><td>{{ $viatico->tipo_viaje }}</td>
                </tr>
                <tr>
                    <td>Documento de acuerdo</td><td>{{ $viatico->acuerdo }}</td>
                </tr>
                <tr>
                    <td>No. de Of. de comisión</td><td>{{ $viatico->oficio }}</td>
                </tr>
                <tr>
                    <td>Fecha de inicio de la comisión</td><td>{{ $viatico->fechainicio_com }}</td>
                </tr>
                <tr>
                    <td>Fecha de fin de la comisión</td><td>{{ $viatico->fechafin_com }}</td>
                </tr>
                <tr>
                    <td>Observaciones</td><td>{{ $viatico->observaciones }}</td>
                </tr>
                <tr>
                    <td>Gasto en alimentación</td><td>{{ $viatico->gasto_alimentacion }}</td>
                </tr>
                <tr>
                    <td>Gasto de viáticos</td><td>{{ $viatico->gasto_viatico }}</td>
                </tr>
                <tr>
                    <td>Monto Comprobado</td><td>{{ $viatico->comprobado }}</td>
                </tr>
                <tr>
                    <td>Monto Sin Comprobar</td><td>{{ $viatico->sin_comprobar }}</td>
                </tr>
            </table>
        @endif
        
        </div>
    </div>
    
    <div class="panel panel-info">
        <div class="panel-heading">Viaje</div>
        <div class="panel-body">
        @if ( count($viaje) == 0 )
            <button type='button' class="btn btn-primary">Capturar</button>
            No hay información sobre el viaje
        @else
        
        @endif
        </div>
    </div>
    
    <div class="panel panel-info">
        <div class="panel-heading">Evento</div>
        <div class="panel-body">
        @if ( count($evento) == 0 )
            <button type='button' class="btn btn-primary">Capturar</button>
            No hay información sobre el Evento
        @else
        
        @endif
        </div>
    </div>
    
    <div class="panel panel-info">
        <div class="panel-heading">Antecedentes</div>
        <div class="panel-body">
        @if ( count($antecedente) == 0 )
            <button type='button' class="btn btn-primary">Capturar</button>
            No hay información sobre los Antecedentes
        @else
        
        @endif
        </div>
    </div>
    
    <div class="panel panel-info">
        <div class="panel-heading">Pasajes</div>
        <div class="panel-body">
        @if ( count($pasaje) == 0 )
            <button type='button' class="btn btn-primary">Capturar</button>
            No hay información sobre los pasajes
        @else
        
        @endif
        </div>
    </div>
    
    <div class="panel panel-info">
        <div class="panel-heading">Vuelos</div>
        <div class="panel-body">
        @if ( count($vuelo) == 0 )
            <button type='button' class="btn btn-primary">Capturar</button>
            No hay información sobre los vuelos
        @else
        
        @endif
        </div>
    </div>
    
    <div class="panel panel-info">
        <div class="panel-heading">Hospedajes</div>
        <div class="panel-body">
        @if ( count($hospedaje) == 0 )
            <button type='button' class="btn btn-primary">Capturar</button>
            No hay información sobre el hospedaje
        @else
        
        @endif
        </div>
    </div>
@stop