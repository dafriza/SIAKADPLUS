$.ajax({
    url: "/getDomisili",
    type: "GET",
    dataType: "json",
    success: function (data) {
        for (let i = 0; i < data.length; i++) {
            // append in select name domisili tag option
            $("select[name=domisili]").append(
                "<option value='" +
                    data[i].id_domisili +
                    "'>" +
                    data[i].nama_ibukota +" , "+ data[i].nama_provinsi+
                    "</option>"
            );
        }
    },
});
