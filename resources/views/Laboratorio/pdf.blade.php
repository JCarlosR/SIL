<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laboratorio - Lezama</title>
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
            <h2>Resultados de Laboratorio</h2>
        </header>
    </div>
    <div class="row">
        <h3>Tipo de Análisis</h3>
        <p>{{ $examen->tipoAnalisis }}</p>

        <h3>Fecha: </h3>
        <p>{{ $examen->fechaRegistro }}</p>

        <h3>Paciente: </h3>
        <p>{{ $paciente->nombre }}</p>

        <h3>Resultado: </h3>
        <p>{{ $examen->resultado }}</p>
    </div>


</body>
</html>
