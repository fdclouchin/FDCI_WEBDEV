<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Div Increment</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #parent_fdc_div{
            float: left;
            width: 50px;
            height: 30px;
            margin: 5px;
            background: green;
        }        
        #addDiv{
            float: left;
        }
    </style>
</head>
<body>
    <button id="addDiv">insert a div tag!</button>
    <div id="parent_fdc_div">fdc</div>
<script>
    $(document).ready(function(){
    $("#addDiv").click(function(){
        $("#parent_fdc_div").after("<div id='parent_fdc_div'>fdc</div>");
        console.warn("added another div!")
        // insertAfter is also the same --- working. teh? wala ka nag dunk?
        // $("<div id='parent_fdc_div'>fdc</div>").insertAfter("#parent_fdc_div"); 
    });
    });
</script>
</body>
</html>