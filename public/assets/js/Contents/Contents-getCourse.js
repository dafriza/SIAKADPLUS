$.ajax({
    url: "/getCourse",
    type: "GET",
    dataType: "json",
    success: function (data) {
        // console.log("data: " + data[2].title);
        for (let i = 0; i < data.length; i++) {
            $("select[name=title]").append(
                "<option value='" +
                    data[i].id_course +
                    "'>" +
                    data[i].title +
                    "</option>"
            );
            // console.log(data[i].id_course);
        }
        // console.log(data[0].title);
    },
});
