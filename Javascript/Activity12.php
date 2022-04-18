<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change event 2</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .cbs{
            color: red;
        }
        #main{
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php include('header.php');?>
    <div id="main">
        <h3>create a program that will detect the text entered by a user. if the user types "fdc", activate the checkbox (add check), else, deactivate the checkbox (remove check)</h3>
        <input type="text" id="fdc_textbox">
        <br>
        <input type="checkbox" id="fdc_checkbox" disabled> <div id="cb1" class="cbs"></div> <b>This checkbox will be enabled if words contains "fdc"</b>
        <br>
        <input type="checkbox" id="fdc_checkbox2" disabled> <div id="cb2" class="cbs"></div> <b>This checkbox will be enabled if inputted words is equal to "fdc"</b>
    </div>
<script>
    // call the function of checking the value of inputted text
    $("#fdc_textbox").change(function(){
        enable_checkbox();
        enable_checkbox2();
    });
    //function for checking the value of inputted text contains fdc
    function enable_checkbox(){
        var strVal = $("#fdc_textbox").val();
        console.log("Entered Value (1): " + strVal);

        if(strVal.includes('fdc')){
            $("input#fdc_checkbox").removeAttr("disabled");
            document.getElementById("cb1").innerHTML = "checkbox ENABLED for checkbox 1";
        }
        else {
            $("input#fdc_checkbox").attr("disabled", true);
            document.getElementById("cb1").innerHTML = "check checkbox 1 if still DISABLED";
        }
    }
    //function for checking the value of the inputted text is equals to the word "fdc"
    function enable_checkbox2(){
        var strVal = $("#fdc_textbox").val();
        console.log("Entered Value (2): " + strVal);

        if(strVal === "fdc"){
            $("input#fdc_checkbox2").removeAttr("disabled");
            document.getElementById("cb2").innerHTML = "checkbox ENABLED for checkbox 2";
        }
        else {
            $("input#fdc_checkbox2").attr("disabled", true);
            document.getElementById("cb2").innerHTML = "check checkbox 2 if still DISABLED";
        }
    }
</script>
</body>
</html>