<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count all elements inside the document</title>
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
        <b>Create a jquery program that will count all the elements inside the document and logs it in the console</b>
        <p></p>
        count all elements in the document, press f12 to check console
        <div class="fdc_parent_container">
                <div></div>
                <div></div>
                <div></div>
                <h1></h1>
                <p></p>
                <span></span>
                <div></div>
                <h2></h2>
                <h3></h3>
                <table></table>
        </div>
    </div>
<script>
    $(document).ready(function(){
        var countAllElements = $("*");
        console.warn("Number of elements in the document = " + countAllElements.length);
    });
</script>
</body>
</html>