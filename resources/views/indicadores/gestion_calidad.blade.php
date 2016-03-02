@extends('layouts.general')

@section('title', 'Gestión de Calidad')
@section('sub-title', 'Mapa estratégico')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Gestión de Calidad</a></li>
    <li class="active"><a href="#">Mapa estratégico</a></li>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('jsPlumb/jsPlumbToolkit-defaults.css') }}">
    <link rel="stylesheet" href="{{ asset('jsPlumb/jsPlumbToolkit-demo.css') }}">
    <link rel="stylesheet" href="{{ asset('jsPlumb/app.css') }}">
    <style>
        @for ($i = 0; $i < 4; $i++)
        #obj{{ $i }} {
            left: {{ ( 50 - strlen($objetivos[$i])/5 ) }}em;
            top: {{ ( 1 + 8 * $i ) }}em;
        }
        @endfor
    </style>
@endsection

@section('content')
    <template id="template-alerta">
        <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Hey!</strong> <span></span>
        </div>
    </template>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Mapa estratégico</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <!-- Mapa estratégico -->
            <div class="jtk-demo-main">
                <div class="jtk-demo-canvas canvas-wide statemachine-demo jtk-surface jtk-surface-nopan" id="canvas">
                    <section class="perspectiva"><p>Perspectiva financiera</p></section>
                    <section class="perspectiva"><p>Perspectiva del cliente</p></section>
                    <section class="perspectiva"><p>Perspectiva de procesos internos</p></section>
                    <section class="perspectiva"><p>Perspectiva de aprendizaje y crecimiento</p></section>

                    @for ($i = 0; $i < 4; $i++)
                        <div class="w" id="obj{{ $i }}" data-destino="{{ $enlaces[$i] }}">
                            {{ $objetivos[$i] }}
                            <div class="ep"></div>
                        </div>
                    @endfor
                </div>
            </div>

            <!-- Botón para imprimir -->
            <div class="row" style="margin-bottom: 15px">
                <div class="col-lg-12">
                    <button type="submit" class="btn bg-orange pull-right" id="btnSave">
                        <span class="glyphicon glyphicon-print"></span> Imprimir
                    </button>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('jsPlumb/jsPlumb-1.7.10.js') }}"></script>
    <script src="{{ asset('scripts/indicadores/mapa-estrategico.js') }}"></script>
@endsection