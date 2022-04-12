<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background color after windows load</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body style="background-color:yellow;">

<!-- Script  -->
<script>
    $( window ).on( "load", function() {
        console.log( "window loaded" );
        $( "body" ).css( {
            "background-color": "blue"} );
    });
</script>
</body>

</html>