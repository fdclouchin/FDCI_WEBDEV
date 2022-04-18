<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count all elements inside a div</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #main{
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php include('header.php');?>
    <div id="main">
        <b>Create a jquery program that will count all the div tags inside this container and logs it in the console</b>
        count all elements inside a div, press f12 to check console
        <div class="fdc_parent_container">
                <div></div>
                <div></div>
                <div></div>
                <h1></h1>
                <p></p>
                <span></span>
                <div></div>
        </div>
    </div>
<script>
    $(document).ready(function(){
        var countAllElements = $(".fdc_parent_container *");
        console.warn("Number of elements in the div = " + countAllElements.length);
    });
</script>
</body>
</html>