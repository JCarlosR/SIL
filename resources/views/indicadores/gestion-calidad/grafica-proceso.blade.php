@extends('layouts.general')

@section('title', 'Procesos de la empresa')
@section('sub-title', 'Edición de procesos de la empresa')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Procesos de la empresa</a></li>
@endsection

@section('content')
    <div id="container" style="min-width: 310px; max-width: 400px; height: 300px; margin: 0 auto"></div>
    <br>
    <br>
    <div id="container2" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(function () {

            $('#container').highcharts({

                        chart: {
                            type: 'gauge',
                            plotBackgroundColor: null,
                            plotBackgroundImage: null,
                            plotBorderWidth: 0,
                            plotShadow: false
                        },

                        title: {
                            text: 'Indice de Tiempo Util del proceso - {{ $nombreProceso->nombre }}'
                        },

                        pane: {
                            startAngle: -150,
                            endAngle: 150,
                            background: [{
                                backgroundColor: {
                                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                                    stops: [
                                        [0, '#FFF'],
                                        [1, '#333']
                                    ]
                                },
                                borderWidth: 0,
                                outerRadius: '109%'
                            }, {
                                backgroundColor: {
                                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                                    stops: [
                                        [0, '#333'],
                                        [1, '#FFF']
                                    ]
                                },
                                borderWidth: 1,
                                outerRadius: '107%'
                            }, {
                                // default background
                            }, {
                                backgroundColor: '#DDD',
                                borderWidth: 0,
                                outerRadius: '105%',
                                innerRadius: '103%'
                            }]
                        },

                        // the value axis
                        yAxis: {
                            min: 0,
                            max: 100,

                            minorTickInterval: 'auto',
                            minorTickWidth: 1,
                            minorTickLength: 10,
                            minorTickPosition: 'inside',
                            minorTickColor: '#666',

                            tickPixelInterval: 30,
                            tickWidth: 2,
                            tickPosition: 'inside',
                            tickLength: 10,
                            tickColor: '#666',
                            labels: {
                                step: 2,
                                rotation: 'auto'
                            },
                            title: {
                                text: 'km/h'
                            },
                            plotBands: [{
                                from: 60,
                                to: 100,
                                color: '#55BF3B' // green
                            }, {
                                from: 50,
                                to: 60,
                                color: '#DDDF0D' // yellow
                            }, {
                                from: 0,
                                to: 50,
                                color: '#DF5353' // red
                            }]
                        },

                        series: [{
                            name: 'Porcentaje',
                            data: [{{ $res }}],
                            tooltip: {
                                valueSuffix: ' %'
                            }
                        }]

                    },
                    // Add some life
                    function (chart) {

                    });
        });
    </script>
    <script type="text/javascript">
        $(function () {
            $('#container2').highcharts({
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Tiempo de cada tipo de operación por proceso'
                },
                subtitle: {
                    text: 'Fuente: Elaboración propia'
                },
                xAxis: {
                    categories: [
                        @foreach($procesos as $proceso)
                            '{{ $proceso->nombre }}',
                        @endforeach

                    ],
                    title: {
                        text: 'Procesos de la empresa'
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Tiempo (minutos)',
                        align: 'high'
                    },
                    labels: {
                        overflow: 'justify'
                    }
                },
                tooltip: {
                    valueSuffix: ' minutos'
                },
                plotOptions: {
                    bar: {
                        dataLabels: {
                            enabled: true
                        }
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -40,
                    y: 100,
                    floating: true,
                    borderWidth: 1,
                    backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                    shadow: true
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Operación',
                    data: [
                            @foreach($operaciones as $operacion)
                                {{ $operacion->operacion }},
                            @endforeach
                    ]
                }, {
                    name: 'Transporte',
                    data: [
                        @foreach($transportes as $transporte)
                            {{ $transporte->transporte }},
                        @endforeach
                ]
                }, {
                    name: 'Inspeccion',
                    data: [
                        @foreach($inspecciones as $inspeccion)
                        {{ $inspeccion->inspeccion }},
                        @endforeach
                    ]
                }, {
                    name: 'Demoras',
                    data: [
                        @foreach($demoras as $demora)
                        {{ $demora->demora }},
                        @endforeach
                    ]
                }, {
                    name: 'Almacenaje',
                    data: [
                        @foreach($almacenajes as $almacenaje)
                        {{ $almacenaje->almacenaje }},
                        @endforeach
                    ]
                }, {
                    name: 'Combinadas',
                    data: [
                        @foreach($combinadas as $combinada)
                        {{ $combinada->combinada }},
                        @endforeach
                    ]
                }]
            });
        });
    </script>
    <script src="{{ asset('Highcharts/js/highcharts.js') }}"></script>
    <script src="{{ asset('Highcharts/js/highcharts-more.js') }}"></script>
    <script src="{{ asset('Highcharts/js/modules/exporting.js') }}"></script>
@endsection