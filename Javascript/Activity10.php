<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hide each h1 tag if clicked</title>
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
        <h3>hide each h1 tag when they are clicked.</h3>
        Click h1 elements below to hide!
        <h1 id="elem1">Hide me 1!</h1>
        <h1 id="elem2">Hide me 2!</h1>
        <h1 id="elem3">Hide me 3!</h1>
        <h1 id="elem4">Hide me 4!</h1>
        <h1 id="elem5">Hide me 5!</h1>
        <h1 id="elem6">Hide me 6!</h1>
    </div>
<script>
    $( ":header" ).click(function() {
            $( this ).remove();
    });
</script>
</body>
</html>