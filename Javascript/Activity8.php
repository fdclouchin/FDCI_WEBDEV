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
        #add_div{
            float: left;
        }
        #main{
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php include('header.php');?>
    <div id="main">
        <div style="margin-bottom: 10px;">
            <b>Create a jquery program that will append div tags inside the div parent below. each div tag added must contain a number that will increment on each addition</b>
        </div>
        <button id="add_div">insert a div tag!</button>
        <div id="parent_fdc_div">fdc</div>
    </div>
<script>
    $(document).ready(function(){
        $("#add_div").click(function(){
            $("#parent_fdc_div").after("<div id='parent_fdc_div'>fdc</div>");
            console.warn("added another div!")
            // insertAfter is also the same --- working. teh? wala ka nag dunk?
            // $("<div id='parent_fdc_div'>fdc</div>").insertAfter("#parent_fdc_div"); 
        });
    });
</script>
</body>
</html>