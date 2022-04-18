<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop-up data to div</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #main{
            padding: 20px;
        }
    </style>
</head>
<body onload="promptFunc()">
    <?php include('header.php');?>
    <div id="main">
        <h3>Create a jquery program that will ask for a person's name, and outputs it inside a div element</h3>
        <p id="targetID"></p>
    </div>
<!-- script -->
<script>
    function promptFunc() {
    let inputName = prompt("Please enter your name", "Enter name here");
        if (inputName === ""){
            document.getElementById("targetID").innerHTML = "No data inputted. Please refresh the page!" + inputName;
            console.error("there was an error occured!");
        }else if (inputName != null){
            document.getElementById("targetID").innerHTML = "Welcome! " + "<b>" + inputName + "</b>" + " To heaven resort. Where you can rest in peace!";
            console.warn("User's name: " + inputName);
        }else{
            console.error("there was an error occured!");
        }
    }
</script>
</body>

</html>