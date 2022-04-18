<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background color after windows load</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #main{
            padding: 20px;
        }
    </style>
</head>
<body style="background-color:yellow;">
    <?php include('header.php');?>
    <div id="main">
        <div class="color_before"></div>
        <h3>Create a jquery program that changes the color of the background whenever the page has successfully loaded everything (BLUE COLOR)</h3>
    </div>
<!-- Script  -->
<script>
    $( window ).on( "load", function() {
        var getColorBefore = $( " body " ).css("background-color");
        console.log( "Color Before: " +getColorBefore );
        $( "body" ).css( {"background-color": "blue"} );
        var getColorAfter = $( " body " ).css("background-color");
        console.log( "Color After: " +getColorAfter );
    });
    <?php include('footer.js'); ?>
</script>
</body>

</html>