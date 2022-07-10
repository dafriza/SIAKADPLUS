let select;
let xhttp;
let xmlData;
let table;
let tableSearch;
// let numb = 90;
$(document).ready(function(){
    Xhttp();
    // tableSearch ="<tr><th>Course List</th><th>Course Rate</th><th>Action</th></tr>" ;
    // let search = $("#search").val();
    Search();


    function Search() {
        $("#search").keyup(function () {
            let search = this.value;
            console.log(this.value);
            // let tableVal = $(".tableVal").text().split("");
            // console.log(tableVal);
            for (let index = 0; index < select.length; index++) {
                let tableVal = select[index].getElementsByTagName("tittle")[0].childNodes[0].nodeValue;
                console.log(tableVal);
                if (tableVal == search) {
                    $("#tableData").empty(table);
                    $("#tableData").empty(tableSearch);
                    tableSearch = "<tr><th>Course List</th><th>Course Rate</th><th>Action</th></tr><tr><td>" + tableVal + "</td><td>" + select[index].getElementsByTagName("rating")[0].childNodes[0].nodeValue + "</td></td><td onclick='deleteData(" + index + ")'>Delete</td></tr>";
                    $("#tableData").html(tableSearch);
                    // console.log("found!");
                } else if (search == "") {
                    console.log("kosong");
                    loadData(xhttp);
                }
            }
        });
    }

    function Xhttp() {
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                loadData(this);

            }
        };
        xhttp.open('GET', "/assets_guest/data.xml", true);
        xhttp.send();

        $("#addNode").click(function () {
            let course = $("#courseVal").val();
            let rate = $("#rateVal").val();
            // console.log("course "+course+" rate "+rate);
            addData(course, rate);
        });
    }
});
function loadData(xml){
    xmlData = xml.responseXML;
    table = "<tr><th onclick='sortTitle()'>Course List</th><th onclick='sortRate()'>Course Rate</th><th>Action</th></tr>";
    select = xmlData.getElementsByTagName("CD");
    // console.log(select);
    // delete
    // select[0].parentNode.removeChild(select[0]);
    // delete
    for (let index = 0; index < select.length; index++) {
        table +="<tr><td>"+select[index].getElementsByTagName("tittle")[0].childNodes[0].nodeValue+
        "</td><td>"+select[index].getElementsByTagName("rating")[0].childNodes[0].nodeValue+
        "</td><td onclick='deleteData("+index+")'>Delete</td></tr>";
    }
    $("#tableData").html(table);
}
function deleteData(index){
    console.log(index);
    select[index].parentNode.removeChild(select[index]);
    console.log(select[index]);
    loadData(xhttp);
}
function addData(courseVal,rateVal){
    if(!(courseVal == '' && rateVal == '')){
        console.log(courseVal+" "+rateVal);
    let cd = xmlData.createElement("CD");

    let tittle = xmlData.createElement("tittle");
    let tittle_val = xmlData.createTextNode(courseVal);
    tittle.appendChild(tittle_val);

    let rating = xmlData.createElement("rating");
    let rating_val = xmlData.createTextNode(rateVal);
    rating.appendChild(rating_val);

    cd.appendChild(tittle);
    cd.appendChild(rating);
    let parent = xmlData.getElementsByTagName("CATALOG")[0];
    // console.log(parent);
    console.log(parent.appendChild(cd));
    loadData(xhttp);
    }
}
function sortTitle(){
    let sortTitle = new Array();
    let tableTitle = "<tr><th onclick='sortTitle()'>Course List</th><th onclick='sortRate()'>Course Rate</th><th>Action</th></tr>";
    // let tableSortTitle = "<tr><th>Course List</th><th>Course Rate</th><th>Action</th></tr>";
    $("#tableData").empty(table);
    for (let index = 0; index < select.length; index++) {
        sortTitle[index]=select[index].getElementsByTagName("tittle")[0].childNodes[0].nodeValue;
        // sortRate[index]=select[index].getElementsByTagName("rating")[0].childNodes[0].nodeValue;
        // console.log(sort.sort());
    }
    for (let index = 0; index < select.length; index++) {
        tableTitle += "<tr><td>"+sortTitle.sort()[index]+
        "</td><td>"+select[index].getElementsByTagName("rating")[0].childNodes[0].nodeValue+
        "</td><td onclick='deleteData("+index+")'>Delete</td></tr>";
        // console.log(sort.sort());
    }

    $("#tableData").html(tableTitle);
    // console.log(sort);
    console.log(sortTitle.sort());
    // console.log(sortRate.sort());
}
function sortRate(){
    let sortRate = new Array();
    let tableTitle = "<tr><th onclick='sortTitle()'>Course List</th><th onclick='sortRate()'>Course Rate</th><th>Action</th></tr>";
    // let tableSortTitle = "<tr><th>Course List</th><th>Course Rate</th><th>Action</th></tr>";
    $("#tableData").empty(table);
    for (let index = 0; index < select.length; index++) {
        sortRate[index]=select[index].getElementsByTagName("rating")[0].childNodes[0].nodeValue;
        // sortRate[index]=select[index].getElementsByTagName("rating")[0].childNodes[0].nodeValue;
        // console.log(sort.sort());
    }
    for (let index = 0; index < select.length; index++) {
        tableTitle += "<tr><td>"+select[index].getElementsByTagName("tittle")[0].childNodes[0].nodeValue+
        "</td><td>"+sortRate.sort()[index]+
        "</td><td onclick='deleteData("+index+")'>Delete</td></tr>";
        // console.log(sort.sort());
    }

    $("#tableData").html(tableTitle);
    // console.log(sort);
    console.log(sortRate.sort());
    // console.log(sortRate.sort());
}
