<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change event</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #fdc_text_ouput{
            background-color:red;
            color: white;            
            word-wrap: break-word;
            padding: 10px;
            font-weight: bold;
            font-size: 15pt;
        }
        #fdc_textbox{
            padding: 5px;
            resize: none; textarea will not be resizable
            font-size: 12pt;
            width: 350px;
        }
        #content_box{
            width: 500px;
            border: 5pt red;
            border-style: dashed;
            padding: 20px;
            font-size: 20pt;
            font-weight: bold;
        }
        .char_counter{
            font-size: 12pt;
            color: #A0A0A0;
            padding-bottom: 10px;
        }
        #main{
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php include('header.php');?>
    <div id="main">
        <h3>catch when the user types something inside a textbox and display it inside a div tag</h3>
        <div id="content_box">
            Type here earthling!
            <br> html tags are accepted, it will not display as normal text
            <textarea id="fdc_textbox" placeholder="Type here ..." maxlength="250" onKeyup="count_remaining_character()"></textarea>
            <div class="char_counter">250 characters remaining</div>
            <div id="fdc_text_ouput"> Inputted value should display here</div>
        </div>
    </div>
<!-- Scripts -->
<script>
    // display inputted values from textarea to target div after clicking away or outside the textarea
    $("#fdc_textbox").change(function(){
        var strVal = $('#fdc_text_ouput').html($(this).val());
        $( "fdc_text_ouput" ).text( strVal );
    });
    //auto resize textarea if value is more than the original height
    $("#fdc_textbox").each(function () {
        this.setAttribute("style", "height:" + (this.scrollHeight) + "px;overflow-y:hidden;");
    }).on("input", function () {
        this.style.height = "auto";
        this.style.height = (this.scrollHeight) + "px";
    });
    //character counter --> will be triggered by onKeyup
    function count_remaining_character() {
        var max_length = 250;
        var character_entered = $('#fdc_textbox').val().length;
        var character_remaining = max_length - character_entered;
        
        $(".char_counter").html(character_remaining + " characters remaining");

       if(character_remaining == 0){
            $(".char_counter").css({"color":"red"});
        }
        else if(character_entered > 0) {
            $(".char_counter").css({"color":"black"});
            console.log(character_remaining);
        } 
        else{
            $(".char_counter").css({"color":"#A0A0A0"});
        }
    }
</script>
</body>
</html>