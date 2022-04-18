<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giv target li bg color</title>
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
        <h3>give the li tag that has the class "fdc-4" a blue background color</h3>
        <button id="add-color">add a color on li tag!</button>
            <ul>
                <li class="fdc-1"></li>
                <li class="fdc-2"></li>
                <li class="fdc-3"></li>
                <li class="fdc-4"></li>
            </ul>
    </div>
<script>
    // When button #addcolor is clicked, .fdc-4 li bg color will change
    $(document).ready(function(){
        $("#add-color").click(function(){
            $( ".fdc-4" ).css( {"background-color": "blue"} );
        });
    });
</script>
</body>
</html>