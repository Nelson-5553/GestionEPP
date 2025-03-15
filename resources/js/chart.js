import ApexCharts from "apexcharts";

document.addEventListener("DOMContentLoaded", function () {
    // Obtener el div del gráfico
    var chartElement = document.getElementById("chart");

    // Extraer datos de los atributos `data-*`
    var categories = JSON.parse(chartElement.getAttribute("data-categories"));
    var solicitudesData = JSON.parse(chartElement.getAttribute("data-solicitudes"));
    var entregasData = JSON.parse(chartElement.getAttribute("data-entregas"));

    var options = {
        series: [{
            name: 'Solicitudes',
            data: solicitudesData
        }, {
            name: 'Entregas',
            data: entregasData
        }],
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                borderRadius: 5,
                borderRadiusApplication: 'end'
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: categories
        },
        yaxis: {
            title: {
                text: 'Cantidad'
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return val + " solicitudes/entregas";
                }
            }
        }
    };

    var chart = new ApexCharts(chartElement, options);
    chart.render();
});
