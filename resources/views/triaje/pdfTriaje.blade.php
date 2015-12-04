<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Perfil de trabajador - Lezama</title>
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
            margin-bottom: 4em;
        }
        h3 {
            margin-top: 2em;
        }
        li {
            margin-bottom: 0.8em;
            text-align: justify;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <img class="limitar" src="{{ asset('images/banner-lezama.png') }}"/>
        </div>
        <div class="row">
            <header>
                <h1>Lezama</h1>
                <h2>Hoja de ruta</h2>
            </header>
            <p>Hoja de ruta del paciente {{ $paciente->nombre }}.</p>
        </div>
        <div class="row">
            <h3>Datos de la empresa</h3>
            <ol>
                <li>
                    <strong>Nombre comercial: </strong>
                    {{ $empresa->nombre_comercial }}
                </li>
                <li>
                    <strong>RUC: </strong>
                    {{ $empresa->ruc }}
                </li>
                <li>
                    <strong>Web: </strong>
                    {{ $empresa->web }}
                </li>
            </ol>
        </div>
        <div class="row">
            <h3>Datos del paciente</h3>
            <ol>
                <li>
                    <strong>Nombre: </strong>
                    {{ $paciente->nombre }}
                </li>
                <li>
                    <strong>Número de hijos: </strong>
                    {{ $paciente->numhijos }}
                </li>
                <li>
                    <strong>Nivel de estudios: </strong>
                    {{ $paciente->estudios }}
                </li>
                <li>
                    <strong>Sexo: </strong>
                    @if( $paciente->sexo == "M" )
                        Masculino
                    @else
                        Femenino
                    @endif
                </li>
                <li>
                    <strong>Grupo de sangre: </strong>
                    {{ $paciente->gruposangre }}
                </li>
            </ol>
        </div>
        <div class="row">
            <table align="center">
                <thead>
                <tr>
                    <th width="10%">#</th>
                    <th width="10%">Trabajador</th>
                    <th width="10%">Espi.</th>
                    <th width="10%">Psic.</th>
                    <th width="10%">R.X</th>
                    <th width="10%">M.E.</th>
                    <th width="10%">Psi.en.</th>
                    <th width="10%">E.A.</th>
                    <th width="10%">Lab.</th>
                    <th width="10%">Oft.</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 0; ?>
                <?php $i=$i+1; $esp = 'no'; $psi = 'no'; $rx = 'no'; $me = 'no'; $psien='no'; $ea = 'no'; $lab= 'no'; $oft= 'no'; ?>
                <tr>
                    <td width="10%">{{ $i }}</td>
                    <td width="10%">{{$paciente->nombre}}</td>
                    @foreach($examenes as $pexamen)
                        @if($pexamen->examen_id == 1)
                            <?php $esp = 'si'; ?>
                        @endif
                        @if($pexamen->examen_id == 2)
                            <?php $psi = 'si'; ?>
                        @endif
                        @if($pexamen->examen_id == 3)
                            <?php $rx = 'si'; ?>
                        @endif
                        @if($pexamen->examen_id == 4)
                            <?php $me = 'si'; ?>
                        @endif
                        @if($pexamen->examen_id == 5)
                            <?php $psien = 'si'; ?>
                        @endif
                        @if($pexamen->examen_id == 6)
                            <?php $ea = 'si' ?>
                        @endif
                        @if($pexamen->examen_id == 7)
                            <?php $lab = 'si' ?>
                        @endif
                        @if($pexamen->examen_id == 8)
                            <?php $oft = 'si' ?>
                        @endif
                    @endforeach
                    <td width="10%">{{ $esp }}</td>
                    <td width="10%">{{ $psi }}</td>
                    <td width="10%">{{ $rx }}</td>
                    <td width="10%">{{ $me }}</td>
                    <td width="10%">{{ $psien }}</td>
                    <td width="10%">{{ $ea }}</td>
                    <td width="10%">{{ $lab }}</td>
                    <td width="10%">{{ $oft }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
