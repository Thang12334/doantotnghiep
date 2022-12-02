var options = {
        series: [{
            name: "Doanh thu",
            data: [21350000, 25860000, 31250000, 37890000, 44120000, 56870000, 66120000, 75800000, 83950000, 95784500, 136835000, 0]
        }],
        chart: {
            height: 320,
            type: "line",
            toolbar: "false",
            dropShadow: {
                enabled: !0,
                color: "#000",
                top: 18,
                left: 7,
                blur: 8,
                opacity: .2
            }
        },
        dataLabels: {
            enabled: !1
        },
        colors: ["#556ee6"],
        stroke: {
            curve: "smooth",
            width: 3
        }
    },
    chart = new ApexCharts(document.querySelector("#line-chart"), options);
chart.render();
options = {
    series: [56, 38, 26],
    chart: {
        type: "donut",
        height: 262
    },
    labels: ["Series A", "Series B", "Series C"],
    colors: ["#556ee6", "#34c38f", "#f46a6a"],
    legend: {
        show: !1
    },
    plotOptions: {
        pie: {
            donut: {
                size: "70%"
            }
        }
    }
};
(chart = new ApexCharts(document.querySelector("#donut-chart"), options)).render();
var radialoptions1 = {
        series: [37],
        chart: {
            type: "radialBar",
            width: 60,
            height: 60,
            sparkline: {
                enabled: !0
            }
        },
        dataLabels: {
            enabled: !1
        },
        colors: ["#556ee6"],
        plotOptions: {
            radialBar: {
                hollow: {
                    margin: 0,
                    size: "60%"
                },
                track: {
                    margin: 0
                },
                dataLabels: {
                    show: !1
                }
            }
        }
    },
    radialchart1 = new ApexCharts(document.querySelector("#radialchart-1"), radialoptions1);
radialchart1.render();
var radialoptions2 = {
        series: [72],
        chart: {
            type: "radialBar",
            width: 60,
            height: 60,
            sparkline: {
                enabled: !0
            }
        },
        dataLabels: {
            enabled: !1
        },
        colors: ["#34c38f"],
        plotOptions: {
            radialBar: {
                hollow: {
                    margin: 0,
                    size: "60%"
                },
                track: {
                    margin: 0
                },
                dataLabels: {
                    show: !1
                }
            }
        }
    },
    radialchart2 = new ApexCharts(document.querySelector("#radialchart-2"), radialoptions2);
radialchart2.render();
var radialoptions3 = {
        series: [54],
        chart: {
            type: "radialBar",
            width: 60,
            height: 60,
            sparkline: {
                enabled: !0
            }
        },
        dataLabels: {
            enabled: !1
        },
        colors: ["#f46a6a"],
        plotOptions: {
            radialBar: {
                hollow: {
                    margin: 0,
                    size: "60%"
                },
                track: {
                    margin: 0
                },
                dataLabels: {
                    show: !1
                }
            }
        }
    },
    radialchart3 = new ApexCharts(document.querySelector("#radialchart-3"), radialoptions3);
radialchart3.render();