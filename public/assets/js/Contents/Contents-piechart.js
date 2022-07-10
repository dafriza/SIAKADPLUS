$.ajax({
    url: "/dataChartPie",
    type: "GET",
    dataType: "json",
    success: function (data) {
        var options = {
            chart: {
                height: 300,
                type: "pie",
            },
            labels: [data[0].title, data[1].title, data[2].title, data[3].title],
            colors: ["#f77eb9", "#7ee5e5", "#4d8af0", "#fbbc06"],
            legend: {
                position: "top",
                horizontalAlign: "center",
            },
            stroke: {
                colors: ["rgba(0,0,0,0)"],
            },
            dataLabels: {
                enabled: false,
            },
            // series: [44, 55, 13, 33]
            series: [
                data[0].JUMLAH,
                data[1].JUMLAH,
                data[2].JUMLAH,
                data[3].JUMLAH,
            ],
        };

        var chart = new ApexCharts(document.querySelector("#apexPie"), options);

        chart.render();

        // dataparse = JSON.parse(data);
        // console.log(dataparse);
        // console.log(dataChart);
    },
});
