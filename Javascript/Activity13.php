<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Light Jquery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #trafficLights{
            background-color: black;
            padding: 10px;
            width: 100px;
        }
        .setmargin{
            align-content: center;
            margin: auto;
            margin-bottom: 15px;
        }
        #main{
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php include('header.php');?>\
    <div id="main">
        <div id="trafficLights">
            <div class="red_light setmargin" style="height: 50px; width: 50px; border-radius: 25px; background-color: red; opacity: 0.5;"></div>
            <div class="yellow_light setmargin" style="height: 50px; width: 50px; border-radius: 25px; background-color: yellow; opacity: 0.5"></div>
            <div class="green_light setmargin" style="height: 50px; width: 50px; border-radius: 25px; background-color: #32CD32; opacity: 0.4"></div>
        </div>
        <br>
        <button class="start_traffic_light" onclick="startTrafficLight()">Start</button>
        <p>
        step 1. show a red light for 60 seconds <br>
        step 2. after 60 seconds, disable the red light and enable the yellow light <br>
        step 3. after 3 seconds, disable the yellow light, and enable the green light <br>
        step 4. after 60 seconds, go back to step 1 <br>
        </p>
        <br>
        timer <input type="text" id="timer" disabled>
    </div>
<!-- Script -->
<script>
    // setting timeout for lights
    let timeout;
    let counter = 0;
    let timer_on = 0;

    function startTrafficLight(){    
        $(".start_traffic_light").attr('disabled', true); //to disable button after clicking
        console.warn("Traffic Light has started");
        var redLight = setTimeout(startRedLight, 1000);
        var yellowLight = setTimeout(startYellowLight, 60000);
        var greenLight = setTimeout(startGreenLight, 63000);
        // timer 
        if (!timer_on) {
            timer_on = 1;
            timerCount();
        }
        else{
            console.error("there was an error");
        }
        console.log("Started: " + counter + " s");
    }

    function startRedLight(){
        console.warn("Red Light is starting");
        $( ".red_light" ).css( {"background-color": "red"} );
        $( ".red_light" ).css( {"opacity": "1"} );
        $( ".yellow_light" ).css( {"opacity": "0.5"} );
        $( ".green_light" ).css( {"opacity": "0.4"} );
        console.log("red light start: " + counter + " s");
    }

    function startYellowLight(){
        $( ".yellow_light" ).css( {"background-color": "yellow"} );
        $( ".yellow_light" ).css( {"opacity": "1"} );
        $( ".red_light" ).css( {"opacity": "0.5"} );
        $( ".green_light" ).css( {"opacity": "0.4"} );
        console.warn("Red Light off");
        console.log("red light off: " + counter + " s");
        console.warn("Yellow Light is starting");
        console.log("yellow light start: " + counter + " s");
    }

    function startGreenLight(){
        $( ".green_light" ).css( {"background-color": "#32CD32"} );
        $( ".green_light" ).css( {"opacity": "1"} );
        $( ".yellow_light" ).css( {"opacity": "0.5"} );
        $( ".red_light" ).css( {"opacity": "0.5"} );
        console.warn("Yellow Light is off");
        console.log("yellow light off: " + counter + " s");
        console.warn("Green Light is starting");
        console.log("green light start: " + counter + " s");
        // clear timeout for all lights
        clearTimeout(redLight);
        clearTimeout(yellowLight);
        clearTimeout(greenLight);
        // assign them new timeout after 
        var redLight = setTimeout(startRedLight, 60000);
        var yellowLight = setTimeout(startYellowLight, 63000);
        var greenLight = setTimeout(startGreenLight, 120000);
        
        console.warn("Green Light is off");
    }
    // for timer only :)
    function timerCount() {
        document.getElementById("timer").value = counter;
        counter++;
        timeout = setTimeout(timerCount, 1000);
    }
// see this site https://codepen.io/lewell94/pen/vYeMVB
</script>
</body>
</html>