<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MOF - Lezama</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .limitar {
            max-width: 100%;
        }
        body {
            margin: 0 1em 4em;
        }
        h3 {
            margin-top: 2em;
        }
        li {
            margin-bottom: 0.8em;
            text-align: justify;
        }
        .row {
            margin-bottom: 2.5em;
        }
        .titulo {
            margin: 1.2em 0;
            font-weight: 600;
            font-size: 1.1em;
        }
    </style>
</head>
<body>
    <div class="row">
        <img class="limitar" src="{{ asset('images/banner-lezama.png') }}"/>
        <header>
            <h1>Lezama</h1>
            <h2>Manual de organización y funciones</h2>
        </header>
        <p>Este "Manual de organización y funciones" constituye la fuente oficial de consulta sobre LEZAMA Consultores de Salud Ocupacional S.C.R.L. pues contiene detalles sobre la estructura organizativa, las líneas de autoridad, las relaciones jerárquicas y de coordinación y la descripción de funciones y estructura de cargos del mismo.</p>
    </div>
    <div class="row">
        <h3>Finalidad.</h3>
        <p>{{ $mof->finalidad }}</p>

        <h3>Alcance.</h3>
        <p>{{ $mof->alcance }}</p>

        @if ($organigrama)
        <h3>Organigrama.</h3>
        <p><img class="limitar" src="{{ asset('images') }}/{{ $mof->organigrama }}"></p>
        @endif
    </div>

    @foreach($cargos as $cargo)
    <div class="row">
        <p class="titulo">{{ ++$c }}. {{ $cargo->nombre }}</p>

        <ol>
            <li><strong>Órgano / Unidad orgánica:</strong></li>
            <p>{{ $cargo->unidad }}</p>
        @if ($cargo->funcion)
            <li><strong>Función básica:</strong></li>
            <p>{{ $cargo->funcion }}</p>
        @endif
        @if ($cargo->relaciones->count() > 0)
            <li><strong>Relaciones del cargo:</strong></li>
            <p>Relaciones internas.</p>
            <ul>
                @foreach ($cargo->relaciones_internas as $relacion)
                <li>{{ $relacion->descripcion }}</li>
                @endforeach
            </ul>
            <p>Relaciones externas.</p>
            <ul>
                @foreach ($cargo->relaciones_externas as $relacion)
                    <li>{{ $relacion->descripcion }}</li>
                @endforeach
            </ul>
        @endif
        @if ($cargo->atribuciones->count() > 0)
            <li><strong>Atribuciones del cargo:</strong></li>
            <ul>
                @foreach ($cargo->atribuciones as $atribucion)
                    <li>{{ $atribucion->descripcion }}</li>
                @endforeach
            </ul>
        @endif
        @if ($cargo->funciones->count() > 0)
            <li><strong>Funciones del cargo:</strong></li>
            <ul>
                @foreach ($cargo->funciones as $funcion)
                    <li>{{ $funcion->descripcion }}</li>
                @endforeach
            </ul>
        @endif
        @if ($cargo->requisitos->count() > 0)
            <li><strong>Requisitos del cargo:</strong></li>
            <ul>
                @foreach ($cargo->requisitos as $requisito)
                    <li><strong>{{ $requisito->nombre }}</strong>. {{ $requisito->descripcion }}</li>
                @endforeach
            </ul>
        @endif

        </ol>
    </div>
    @endforeach

</body>
</html>
