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
                <h2>Reglamento Interno del Trabajo</h2>
            </header>

        </div>

        <div class="row">
            <div><strong>I. OBJETO</strong></div>
            <p>
                {{ $rit->objeto }}
            </p>
            <div><strong>II. ALCANCE</strong></div>
            <p>
                {{ $rit->alcance }}
            </p>
            <?php $i = 0; ?>
            @foreach($titulos as $titulo)
            <div align="center"><strong>{{ $titulo->nombre }}</strong></div>
                @foreach($titulo->capitulos as $capitulo)
                    <div align="center"><strong>CAPITULO {{ $capitulo->romano }}</strong></div>
                    <div align="center"><strong>{{ $capitulo->descripcion }}</strong></div>
                    @foreach($capitulo->articulos as $articulo)
                        <?php $i = $i + 1; ?>
                        <div>ARTICULO {{ $i }}.- {{ $articulo->descripcion }}</div>
                        @foreach($articulo->items as $item)
                            <p>
                                <b>{{ $item->romano }}. </b>{{ $item->descripcion }}
                            </p>
                        @endforeach
                    @endforeach
                @endforeach
            @endforeach
        </div>
    </div>
</body>
</html>
