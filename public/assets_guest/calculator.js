// console.log("hehe");
let firstVal;
let secondVal;
let operator;
$("document").ready(function() {
    $("span").click(function(){
        // console.log(this.textContent);
        let obj = this.textContent;
        if(obj == "+"){
            firstVal = parseInt($(".field").text());
            operator = "+";
            $(".field").text("");
        }else if(obj == "-"){
            firstVal = parseInt($(".field").text());
            operator = "-";
            $(".field").text("");
        }else if(obj == "X"){
            firstVal = parseInt($(".field").text());
            operator = "X";
            $(".field").text("");
        }
        else if(obj == "/"){
            firstVal = parseInt($(".field").text());
            operator = "/";
            $(".field").text("");
        }else if(obj == "C"){
            $(".field").text("");
            firstVal = "";
            secondVal = "";
        }
        else if(obj == "%"){
            firstVal = parseInt($(".field").text());
            operator = "%";
            $(".field").text("");
        }
        else if(obj == "="){
            secondVal = parseInt($(".field").text());
            if(operator == "+"){
                $(".field").text(firstVal + secondVal);
            }else if(operator == "-"){
                $(".field").text(firstVal - secondVal);
            }else if(operator == "/"){
                $(".field").text(firstVal / secondVal);
            }else if(operator == "X"){
                $(".field").text(firstVal * secondVal);
            }else if(operator == "%"){
                $(".field").text(firstVal % secondVal);
            }
            // console.log("firstval : "+firstVal+"  secondVal : ", secondVal+" hasil = "+(firstVal+secondVal));
        }else{
            // console.log(obj);
            $(".field").append(obj);
        }
    });
});