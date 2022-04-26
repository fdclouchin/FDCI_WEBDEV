<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Light Jquery</title>
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
        <p>
        step 1. show a red light for 60 seconds <br>
        step 2. after 60 seconds, disable the red light and enable the yellow light <br>
        step 3. after 3 seconds, disable the yellow light, and enable the green light <br>
        step 4. after 60 seconds, go back to step 1 <br>
        </p>
    </div>
<!-- Script -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(document).ready(startTrafficLight);

    function startTrafficLight(){
        setTimeout(function(){
        $( ".red_light" ).css( {"background-color": "red"} );
        $( ".red_light" ).css( {"opacity": "1"} );
        $( ".yellow_light" ).css( {"opacity": "0.5"} );
        $( ".green_light" ).css( {"opacity": "0.4"} );
            setTimeout(function(){
            $( ".yellow_light" ).css( {"background-color": "yellow"} );
            $( ".yellow_light" ).css( {"opacity": "1"} );
            $( ".red_light" ).css( {"opacity": "0.5"} );
            $( ".green_light" ).css( {"opacity": "0.4"} );
                setTimeout(function(){
                    $( ".green_light" ).css( {"background-color": "#32CD32"} );
                    $( ".green_light" ).css( {"opacity": "1"} );
                    $( ".yellow_light" ).css( {"opacity": "0.5"} );
                    $( ".red_light" ).css( {"opacity": "0.5"} );
                        setTimeout(function(){
                            startTrafficLight();
                        }, 60000); //time for startTrafficLight to loop 
                },3000); //time for green
            },60000); //time for yellow
        },0); //time for red
    }
</script>
</body>
</html>