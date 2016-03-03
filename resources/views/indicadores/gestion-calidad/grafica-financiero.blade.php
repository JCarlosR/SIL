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
    <div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
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
                            text: 'Indice de gastos por el área - {{ $areaNombre->nombre }} - para el año - {{$anual}}'
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
                            max: 2,

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
                                from: 0,
                                to: 0.90,
                                color: '#55BF3B' // green
                            }, {
                                from: 0.90,
                                to: 1.2,
                                color: '#DDDF0D' // yellow
                            }, {
                                from: 1.2,
                                to: 2,
                                color: '#DF5353' // red
                            }]
                        },

                        series: [{
                            name: 'Resultado de la división',
                            data: [{{ $res }}],
                            tooltip: {
                                valueSuffix: ''
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
                    type: 'column'
                },
                title: {
                    text: 'Montos presupuestados y reales del área - {{$areaNombre->nombre}}'
                },
                subtitle: {
                    text: 'Fuente: Elaboracion propia'
                },
                xAxis: {
                    categories: [
                        @foreach($anualTotal as $anio)
                            '{{ $anio->anual }}',
                        @endforeach
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Monto (S/.)'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} S/.</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Presupuestado',
                    data: [
                            @foreach($presupuestos as $presupuesto)
                                {{ $presupuesto->presupuesto }},
                            @endforeach
                    ]

                }, {
                    name: 'Gasto Real',
                    data: [
                        @foreach($reales as $real)
                            {{ $real->real }},
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