<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Viáticos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<!--    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}" /> -->
</head>

<body>
    <div class="container">
        @section('tabs')
        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="/">Inicio</a></li>
            <li><a href="{{ action('ViaticosController@inicio') }}">Funcionarios</a></li>
            <li><a href="{{ action('ConsultasController@inicio') }}">Ciudadanos</a></li>
            <li><a href="{{ action('AdminController@inicio') }}">Administración</a></li>
        </ul>
        @show
    
    
    @yield('content')
    </div>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!--    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>-->
</body>

</html>
