<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change bg color by click</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #main{
            padding: 20px;
        }
    </style>
</head>
<body style="background-color: yellow;">
    <?php include('header.php');?>
    <div id="main">
        <h3>Create a jquery program that allows users to modify the background color of a website with a click of a button</h3>
        <button id = "changeBG">Click to change bg color</button>
    </div>
<script>
    $( "#changeBG" ).click(function() {
        $("body").css({
            "background-color": "red"
        })
        console.warn("Background-color changed");
    });
</script>
</body>

</html>