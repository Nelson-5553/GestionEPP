import ApexCharts from "apexcharts";

document.addEventListener("DOMContentLoaded", function () {
    var chartElement = document.getElementById("chart");

    if (!chartElement) return;

    var categories = JSON.parse(chartElement.getAttribute("data-categories"));
    var solicitudesData = JSON.parse(chartElement.getAttribute("data-solicitudes"));
    var entregasData = JSON.parse(chartElement.getAttribute("data-entregas"));

    function getThemeColors() {
        // Detectar si el modo oscuro está activo en Tailwind
        const isDark = document.documentElement.classList.contains("dark");

        return isDark
            ? {
                background: "#1e1e1e",
                textColor: "#f5f5f5",
                gridColor: "#efefef",  // Color de las líneas del gráfico en modo oscuro
                barColors: ["#007BFF", "#00E676"] // Azul y Verde Neón en modo oscuro
              }
            : {
                background: "#ffffff",
                textColor: "#333",
                gridColor: "#ddd",  // Color de las líneas del gráfico en modo claro
                barColors: ["#0049ff", "#ff2d00"] // Azul y Rojo en modo claro
              };
    }

    function renderChart() {
        const theme = getThemeColors();

        var options = {
            series: [
                { name: "Solicitudes", data: solicitudesData },
                { name: "Entregas", data: entregasData }
            ],
            chart: {
                type: "bar",
                height: 350,
                background: theme.background
            },
            title: {
                text: "Solicitudes y Entregas Mensuales",
                align: "left",
                style: {
                    fontSize: "18px",
                    fontWeight: "bold",
                    fontFamily: "Arial",
                    color: theme.textColor
                }
            },
            colors: theme.barColors,
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: "55%",
                    borderRadius: 2,
                    opacity: 0
                }
            },
            dataLabels: {
                enabled: true, // Ahora está activado correctamente
                offsetY: -10,
                style: {
                    fontSize: "12px",
                    colors: [theme.textColor]
                }
            },
            stroke: {
                show: true,
                width: 2,
            },
            xaxis: {
                categories: categories,
                labels: {
                    style: {
                        colors: Array(categories.length).fill(theme.textColor) // Se fuerza el color en todas las etiquetas
                    }
                },
                axisBorder: { color: theme.gridColor },
                axisTicks: { color: theme.gridColor }
            },

            yaxis: {
                labels: { style: { color: theme.textColor } },
                axisBorder: { color: theme.gridColor },
                axisTicks: { color: theme.gridColor }
            },
            grid: {
                borderColor: theme.textColor, // Usar el color del texto en vez del gridColor oscuro
                strokeDashArray: 4
            },

            tooltip: {
                theme: theme.background === "#1e1e1e" ? "dark" : "light",
                y: {
                    formatter: (val) => val + " solicitudes/entregas"
                }
            }
        };

        var chart = new ApexCharts(chartElement, options);
        chart.render();

        return chart;
    }

    var chart = renderChart();

    // Observar cambios en la clase "dark" de Tailwind y actualizar el gráfico
    const observer = new MutationObserver(() => {
        if (chart) chart.destroy(); // Destruir gráfico previo
        chart = renderChart(); // Volver a renderizar
    });

    observer.observe(document.documentElement, { attributes: true, attributeFilter: ["class"] });
});
