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
                <h2>Perfil de trabajador</h2>
            </header>
            <p>Todo trabajador en Lezama Consultores debe cumplir con las siguientes características.</p>
        </div>
        <div class="row">
            <h3>Valores</h3>
            <ol>
            @foreach($valores as $skill)
                <li>
                    <strong>{{ $skill->name }}.</strong>
                    {{ $skill->description}}
                </li>
            @endforeach
            </ol>
        </div>
        <div class="row">
            <h3>Conocimientos</h3>
            <ol>
                @foreach($conocimientos as $skill)
                    <li>
                        <strong>{{ $skill->name }}.</strong>
                        {{ $skill->description}}
                    </li>
                @endforeach
            </ol>
        </div>
        <div class="row">
            <h3>Habilidades</h3>
            <ol>
                @foreach($habilidades as $skill)
                    <li>
                        <strong>{{ $skill->name }}.</strong>
                        {{ $skill->description}}
                    </li>
                @endforeach
            </ol>
        </div>
    </div>

</body>
</html>
