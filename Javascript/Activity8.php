<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Div Increment</title>
    <style>
        #parent_fdc_div{
            float: left;
            position: relative;
            /* width: 50px; */
            /* height: 30px; */
            margin: 5px;
            background: green;
        }        
        #add_div{
            float: left;
        }
        #main{
            padding: 20px;
        }
        .clone_fdc_div{
            width: 50px;
            height: 30px;
            margin: 5px;
            background: red;
            float: right;
        }   
    </style>
</head>
<body>
    <?php include('header.php');?>
    <div id="main">
        <div style="margin-bottom: 10px;">
            <b>Create a jquery program that will append div tags inside the div parent below. each div tag added must contain a number that will increment on each addition</b>
        </div>
        <button id="add_div">insert a div tag!</button>
        <div id="parent_fdc_div">div tags will be inserted inside this div</div>
        <!-- hidden until button is clicked -->
        <div class="child_fdc_div" style="display:none"></div>
    </div>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        var count = 1;
        $("#add_div").on('click',function(){
        let copyTemplate = $('.child_fdc_div').clone();
        copyTemplate.removeAttr('style').removeClass('child_fdc_div').addClass('clone_fdc_div '+ (count++) +'');
        copyTemplate.show();
        $("#parent_fdc_div").append(copyTemplate);
        });
    });
</script>
</body>
</html>