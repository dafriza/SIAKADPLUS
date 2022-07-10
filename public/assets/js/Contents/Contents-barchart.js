$.ajax({
    url: "/dataChartBar",
    type: "GET",
    dataType: "json",
    success: function (data) {
        var options = {
            chart: {
                type: "bar",
            },
            series: [
                {
                    name: "Course Buyed",
                    data: [
                        {
                            x: "Jan",
                            y: data[0].JUMLAH,
                        },
                        {
                            x: "Feb",
                            y: data[1].JUMLAH,
                        },
                        {
                            x: "Mar",
                            y: data[2].JUMLAH,
                        },
                        {
                            x: "Apr",
                            y: data[3].JUMLAH,
                        },
                        {
                            x: "May",
                            y: data[4].JUMLAH,
                        },
                        {
                            x: "Jun",
                            y: data[5].JUMLAH,
                        },
                        {
                            x: "Jul",
                            y: data[6].JUMLAH,
                        },
                        {
                            x: "Aug",
                            y: data[7].JUMLAH,
                        },
                        {
                            x: "Sep",
                            y: data[8].JUMLAH,
                        },
                        {
                            x: "Oct",
                            y: data[9].JUMLAH,
                        },
                        {
                            x: "Nov",
                            y: data[10].JUMLAH,
                        },
                        {
                            x: "Dec",
                            y: data[11].JUMLAH,
                        },
                    ],
                },
            ],
        };

        var chart = new ApexCharts(document.querySelector("#apexBar"), options);

        chart.render();
    },
});
