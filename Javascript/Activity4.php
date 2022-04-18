<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get background color</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="fdc_div_element" style="background-color: purple; height: 500px; width: 100%;"></div>
    <br>
    <button id="getDivColor">WHAT COLOR AM I?</button>
    <br>
    <span id="answer"></span>

<script>
    $("#getDivColor").click(function(){
        //line of code to change rgb to hext ->> // const rgb2hex = (rgb) => `#${rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/).slice(1).map(n => parseInt(n, 10).toString(16).padStart(2, '0')).join('')}`
        var getColor = $( "#fdc_div_element" ).css("background-color");
        $("#answer").html("Background color is:" + getColor + "<div style='background-color:" + getColor + "; width: 150px; height: 150px;'" +"test" + "</div>");
        console.warn("button clicked, div color: " + getColor);
    });
</script>
</body>

</html>