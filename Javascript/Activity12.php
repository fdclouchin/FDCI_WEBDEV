<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change event 2</title>
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
        <input type="checkbox" id="fdc_checkbox" disabled> <div id="cb1" class="cbs"></div> <b>This checkbox will be enabled if words contains/equals to "fdc"</b>
    </div>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    // call the function of checking the value of inputted text
    $("#fdc_textbox").change(function(){
        enable_checkbox();
    });
    //function for checking the value of inputted text contains fdc
    function enable_checkbox(){
        var strVal = $("#fdc_textbox").val();
        console.log("Entered Value: " + strVal);

        if(strVal.includes('fdc') || strVal === "fdc"){
            $("input#fdc_checkbox").removeAttr("disabled");
            document.getElementById("cb1").innerHTML = "contains fdc word; checkbox enabled";
        }
        else {
            $("input#fdc_checkbox").attr("disabled", true);
            $("input#fdc_checkbox").prop("checked", false);
            document.getElementById("cb1").innerHTML = "checkbox is disabled and check is removed";
        }
    }
</script>
</body>
</html>