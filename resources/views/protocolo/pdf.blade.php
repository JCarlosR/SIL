<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Atención y Consulta - Lezama</title>
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
                <h2>ORDEN N° {{ 1000+$id }}</h2>
            </header>

        </div>

        <div class="row">
                <br>
                <h2>Empresa {{ $protocolo->empresa->nombre_comercial }}</h2>

                <table border="0.5" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th width="30%">Trabajador</th>
                        <th>Perfil</th>
                        <th>Espi.</th>
                        <th>Psic.</th>
                        <th>R.X</th>
                        <th>M.E.</th>
                        <th>Psi.en.</th>
                        <th>E.A.</th>
                        <th>Lab.</th>
                        <th>Oft.</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 0; ?>
                    @foreach($ordenes as $orden)
                        <?php $i=$i+1; $esp = 'no'; $psi = 'no'; $rx = 'no'; $me = 'no'; $psien='no'; $ea = 'no'; $lab= 'no'; $oft= 'no'; ?>
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{$orden->paciente->nombre}}</td>
                            <td>{{ $orden->paciente->perfil->descripcion }}</td>
                            @foreach($orden->pacienteexamenes as $pexamen)
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
                            <td align="center">{{ $esp }}</td>
                            <td align="center">{{ $psi }}</td>
                            <td align="center">{{ $rx }}</td>
                            <td align="center">{{ $me }}</td>
                            <td align="center">{{ $psien }}</td>
                            <td align="center">{{ $ea }}</td>
                            <td align="center">{{ $lab }}</td>
                            <td align="center">{{ $oft }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</body>
</html>
