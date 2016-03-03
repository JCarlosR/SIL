$(document).on('ready', funcPrincipal);

function funcPrincipal() {
    $('form').on('submit', evaluarIndicador);
}

function evaluarIndicador() {
    event.preventDefault();

    var inicio = $('#inicio').val();
    var fin = $('#fin').val();

    $.getJSON('../calcular/indice-atencion', { inicio: inicio, fin: fin }, function (data) {
        console.log(data);
        asignarPieLegend(data.atendidas, data.omitidas, data.pendientes);
        asignarGauge(data.atendidas);
    });

}

function asignarPieLegend(atendidas, omitidas, pendientes) {
    $('#container_pie').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Quejas según su estado'
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
                name: 'Quejas atendidas',
                y: atendidas
            }, {
                name: 'Quejas omitidas',
                y: omitidas,
                sliced: true,
                selected: true
            }, {
                name: 'Quejas pendientes',
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
                text: 'Índice de atención'
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
                    text: '% atención'
                },
                plotBands: [{
                    from: 0,
                    to: 70,
                    color: '#DF5353' // red
                }, {
                    from: 70,
                    to: 85,
                    color: '#DDDF0D' // yellow
                }, {
                    from: 85,
                    to: 100,
                    color: '#55BF3B' // green
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