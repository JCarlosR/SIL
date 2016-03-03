@extends('layouts.general')

@section('title', 'Índice de pérdidas por cancelación de protocolos')
@section('sub-title', 'Indicador - Atención al cliente')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Atención al cliente</a></li>
    <li><a href="#" class="active">índice de pérdidas</a></li>
@endsection

@section('content')
    <div class="col-md-6">
        <div class="box">
            <div class="box-header with-border">
                <h2 class="box-title">Sobre el indicador</h2>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <label>Objetivo</label>
                <p>Incrementar la rentabilidad</p>

                <label>Descripción del indicador</label>
                <p>
                    Este indicador nos permite conocer la cantidad de ingresos que no obtuvo Lezama
                    por la cancelación de protocolos, con relación a los que sí obtuvo por atenciones finalizadas.
                </p>

                <label>Fórmula del indicador</label>
                <p>Ingresos perdidos por cancelación / Ingresos percibidos</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="box">
            <div class="box-header with-border">
                <h2 class="box-title">Meta y semáforo</h2>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <label>Meta</label>
                <p>
                    Lograr un porcentaje de pérdidas por cancelación <b>inferior al 15%</b>.
                </p>
                <label>Semáforo</label>
                <p><span class="glyphicon glyphicon-ok" style="color: green"> Bien:</span> Menos del 15%</p>
                <p><span class="glyphicon glyphicon-ok" style="color: darkorange"> Regular:</span> Entre 15 y 20%</p>
                <p><span class="glyphicon glyphicon-ok" style="color: red"> Mal:</span> Más del 20%</p>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h2 class="box-title">Evaluación del indicador</h2>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <form action="">
                    <p>Seleccione un rango de fechas.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="inicio">Inicio</label>
                            <input type="date" class="form-control" id="inicio" required>
                        </div>
                        <div class="col-md-6">
                            <label for="fin">Fin</label>
                            <input type="date" class="form-control" id="fin" required>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success text-center">Evaluar indicador</button>
                </form>

                <div id="container_pie" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
                <div id="container_gauge" style="min-width: 310px; max-width: 400px; height: 300px; margin: 0 auto"></div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('Highcharts/js/highcharts.js') }}"></script>
    <script src="{{ asset('Highcharts/js/highcharts-more.js') }}"></script>
    <script src="{{ asset('Highcharts/js/modules/exporting.js') }}"></script>
    <script src="{{ asset('scripts/indicadores/atencion-cliente/perdidas.js') }}"></script>
@endsection