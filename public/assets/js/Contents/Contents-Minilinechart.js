$.ajax({
    url: "/dataChartBar",
    type: "GET",
    dataType: "json",
    success: function (data) {

        let temp = 0;
        let total = 0;
        for (let i = 0; i < data.length; i++) {
            if(i == 11){
                break;
            }
            temp +=((data[i+1].JUMLAH - data[i].JUMLAH)/data[i].JUMLAH) * 100;
            // console.log("jumlah temp "+temp);
            // console.log( ((data[i+1].JUMLAH - data[i].JUMLAH)/data[i].JUMLAH) * 100 + " = " +data[i+1].JUMLAH +" "+ data[i].JUMLAH);
        }
        data.forEach(val => {
            total += val.JUMLAH;
        });
        // console.log("ini temp -> "+temp/11);
        $("#totalData").html(total);
        $("#percentage").html("+"+(temp/11).toFixed(2)+" %");

        if ($("#apexPercentage").length) {
            var options1 = {
                chart: {
                    type: "line",
                    height: 60,
                    sparkline: {
                        enabled: !0,
                    },
                },
                series: [
                    {
                        data: [
                            data[0].JUMLAH,
                            data[1].JUMLAH,
                            data[2].JUMLAH,
                            data[3].JUMLAH,
                            data[4].JUMLAH,
                            data[5].JUMLAH,
                            data[6].JUMLAH,
                            data[7].JUMLAH,
                            data[8].JUMLAH,
                            data[9].JUMLAH,
                            data[10].JUMLAH,
                            data[11].JUMLAH,
                        ],
                    },
                ],
                stroke: {
                    width: 2,
                    curve: "smooth",
                },
                markers: {
                    size: 0,
                },
                colors: ["#727cf5"],
                tooltip: {
                    fixed: {
                        enabled: !1,
                    },
                    x: {
                        show: !1,
                    },
                    y: {
                        title: {
                            formatter: function (e) {
                                return "";
                            },
                        },
                    },
                    marker: {
                        show: !1,
                    },
                },
            };
            new ApexCharts(
                document.querySelector("#apexPercentage"),
                options1
            ).render();
        }
    },
});
