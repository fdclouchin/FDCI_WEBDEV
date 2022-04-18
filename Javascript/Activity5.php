<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Width/Height of a div</title>
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
        <h3>Create a jquery program that will get the height and width the div element below and logs it in the console</h3>
        <div id="fdc_div_element" style="height: 200px; width: 200px; border: 1pt solid red;">This is div</div>
        <button id="getXY">WHAT'S MY HEIGHT AND WIDTH?</button>
    </div>
<script>
    $(document).ready(function () {
        $("#getXY").click(function () {
            var divWidth = $("#fdc_div_element").width();
            var divHeight = $("#fdc_div_element").height();
            $("#fdc_div_element").html("Width: " + divWidth + ", " + "Height: " + divHeight);
            console.warn("Width: " +divWidth + ", Height: " + divHeight );
        });
    });
</script>
</body>
</html>