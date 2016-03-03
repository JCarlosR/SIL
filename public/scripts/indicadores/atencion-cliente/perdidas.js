$(document).on('ready', funcPrincipal);

function funcPrincipal() {
    $('form').on('submit', evaluarIndicador);
}

function evaluarIndicador() {
    event.preventDefault();

    var inicio = $('#inicio').val();
    var fin = $('#fin').val();

    $.getJSON('../calcular/indice-perdidas', { inicio: inicio, fin: fin }, function (data) {
        console.log(data);
        asignarPieLegend(data.verificados, data.cancelados, data.pendientes);
        asignarGauge(data.indice);
    });

}

function asignarPieLegend(aprobados, cancelados, pendientes) {
    $('#container_pie').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Comparación de montos según estados'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Porcentaje',
            colorByPoint: true,
            data: [{
                name: 'Protocolos verificados',
                y: aprobados
            }, {
                name: 'Protocolos cancelados',
                y: cancelados,
                sliced: true,
                selected: true
            }, {
                name: 'Protocolos pendientes',
                y: pendientes
            }]
        }]
    });
}

function asignarGauge(indice) {
    $('#container_gauge').highcharts({
            chart: {
                type: 'gauge',
                plotBackgroundColor: null,
                plotBackgroundImage: null,
                plotBorderWidth: 0,
                plotShadow: false
            },

            title: {
                text: 'Índice de pérdidas'
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
                    text: '% perdido'
                },
                plotBands: [{
                    from: 0,
                    to: 15,
                    color: '#55BF3B' // green
                }, {
                    from: 15,
                    to: 20,
                    color: '#DDDF0D' // yellow
                }, {
                    from: 20,
                    to: 100,
                    color: '#DF5353' // red
                }]
            },

            series: [{
                name: 'Índice',
                data: [indice],
                tooltip: {
                    valueSuffix: ' %'
                }
            }]

        },
        // Add some life
        function (chart) {
        });
}