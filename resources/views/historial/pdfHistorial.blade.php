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
        table, th, td {
            text-align: center;
            border: 1px solid black;

        }
    </style>
</head>
<body>
    <div class="row">
        <img class="limitar" src="{{ asset('images/banner-lezama.png') }}"/>
        <header>
            <h1>Lezama</h1>
            <h2>Historial clínico</h2>
        </header>

    </div>
    <div class="row">
        <h3>Datos del paciente</h3>
        <p><strong>Nombre del paciente</strong></p>
        <p>{{ $paciente->nombre }}</p>

        <p><strong>Empresa</strong></p>
        <p>{{ $empresa->nombre_comercial }}</p>

        <p><strong>DNI del paciente</strong></p>
        <p>{{ $paciente->dni }}</p>

        <p><strong>Número de hijos</strong></p>
        <p>{{ $paciente->numhijos }}</p>

        <p><strong>Sexo</strong></p>
        <p> @if($paciente->sexo == 'M') Masculino
            @else Femenino
            @endif
        </p>

        <p><strong>Grupo de sangre</strong></p>
        <p>{{ $paciente->gruposangre }}</p>

    </div>

    <div class="row">
        <table cellspacing="0" cellpadding="5" width="50%" align="center">
            <tr>
                <td width="10%">Hojas de ruta</td>
                <td width="10%">Fecha</td>
            </tr>

            @foreach($ordenes as $orden)
                <tr>
                    <td width="10%">HDR-00{{ $orden->id }}</td>
                    <td width="10%">{{ $orden->created_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>


</body>
</html>
