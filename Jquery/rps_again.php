<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery - Rock Paper Scissors</title>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        #result{
            background-color: white;
            padding: 10px;
        }
        #start{
            font-size: 40pt;
        }
       body{
            background: url("assets/rps.jpg") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height: 100%;
            width: 100%;
        }
        .main{
            margin-top: 200px;
        }
        .p1{
            border-radius: 20%;
        }
        .p2{
            border-radius: 20%;
        }
        .versus-button{
            height: 380px;
        }
        .test{
            border: 1pt solid red;
        }
    </style>
</head>
<body>
    <div class="container-fluid main">
        <div class="row">
            <div class="col-md-1 offset-md-1"></div>
            <div class="col-md-3 text-center p1">
                <h1>Player 1</h1>
                <img class="player1 rounded mx-auto d-block"/>
                <span class="playerOneLabel">random hand</span>
            </div>
            <div class="col-md-2 justify-content-center text-center d-flex align-items-md-center versus-button">
                <button id="start" class="btn btn-danger p-4">VS</button>
            </div>
            <div class="col-md-3 text-center p2">
                <h1>Player 2</h1>
                <img class="player2 rounded mx-auto d-block"/>
                <span class="playerTwoLabel">random hand</span>
            </div>
        </div>
        <div class="col-md-2 offset-md-5 text-center">
            WINNER: 
            <div id="result" class="fw-bold">Should display if which player will win</div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(startGame);
        // create 3 functions for tie, player1win, player2win
        function startGame(){
            $('#start').on('click', function(){
                // randomize 1-3 for player 1 and player 2
                let playerOne = Math.floor((Math.random() * 3) + 1);
                let playerTwo = Math.floor((Math.random() * 3) + 1);
                //rock paper scissors with number value
                const rock = 1;
                const paper = 2;
                const scissors = 3;
                
                function comparePlayers(){
                    if (playerOne == rock){
                        if (playerTwo == paper){
                            console.log("Player 2 Wins");
                            $('#result').html("Player 2 Wins").removeAttr('style');
                            $('.p2').css({'background-color':'green'});
                            $('.p1').css({'background-color':'white'});
                            $(".player1").attr("src","assets/rock.png");
                            $(".playerOneLabel").html("Player 1: Rock");
                            $(".player2").attr("src","assets/paper.png");
                            $(".playerTwoLabel").html("Player 2: Paper");
                        }else if (playerTwo == scissors){
                            console.log("Player 1 Wins");
                            $('#result').html("Player 1 Wins").removeAttr('style');
                            $('.p1').css({'background-color':'green'});
                            $('.p2').css({'background-color':'white'});
                            $(".player1").attr("src","assets/rock.png");
                            $(".playerOneLabel").html("Player 1: Rock");
                            $(".player2").attr("src","assets/scissors.png");
                            $(".playerTwoLabel").html("Player 2: Scissors");
                        }
                    }else if (playerOne == paper){
                        if (playerTwo == rock){
                            console.log("Player 1 Wins");
                            $('#result').html("Player 1 Wins").removeAttr('style');
                            $('.p1').css({'background-color':'green'});
                            $('.p2').css({'background-color':'white'});
                            $(".player2").attr("src","assets/rock.png");
                            $(".playerTwoLabel").html("Player 2: Rock");
                            $(".player1").attr("src","assets/paper.png");
                            $(".playerOneLabel").html("Player 1: Paper" );
                        }else if (playerTwo == scissors){
                            console.log("Player 2 Wins");
                            $('#result').html("Player 2 Wins").removeAttr('style');
                            $('.p2').css({'background-color':'green'});
                            $('.p1').css({'background-color':'white'});
                            $(".player1").attr("src","assets/paper.png");
                            $(".playerOneLabel").html("Player 1: Paper");
                            $(".player2").attr("src","assets/scissors.png");
                            $(".playerTwoLabel").html("Player 2: Scissors");
                        }
                    }else if (playerTwo == rock){
                        if (playerOne == paper){
                            console.log("Player 1 Wins");
                            $('#result').html("Player 1 Wins").removeAttr('style');
                            $('.p1').css({'background-color':'green'});
                            $('.p2').css({'background-color':'white'});
                            $(".player2").attr("src","assets/rock.png");
                            $(".playerTwoLabel").html("Player 2: Rock");
                            $(".player1").attr("src","assets/paper.png");
                            $(".playerOneLabel").html("Player 1: Paper");
                        }else if (playerOne == scissors){
                            console.log("Player 2 Wins");
                            $('#result').html("Player 2 Wins").removeAttr('style');
                            $('.p2').css({'background-color':'green'});
                            $('.p1').css({'background-color':'white'});
                            $(".player2").attr("src","assets/rock.png");
                            $(".playerTwoLabel").html("Player 2: Rock");
                            $(".player1").attr("src","assets/scissors.png");
                            $(".playerOneLabel").html("Player 1: Scissors");
                        }
                    }else if (playerTwo == paper){
                        if (playerOne == rock){
                            console.log("Player 2 Wins");
                            ('#result').html("Player 2 wins").removeAttr('style');
                            $('.p2').css({'background-color':'green'});
                            $('.p1').css({'background-color':'white'});
                            $(".player1").attr("src","assets/rock.png");
                            $(".playerOneLabel").html("Player 1: Rock");
                            $(".player2").attr("src","assets/paper.png");
                            $(".playerTwoLabel").html("Player 2: Paper");
                        }else if (playerOne == scissors){
                            console.log("Player 1 Wins");
                            $('#result').html("Player 1 Wins").removeAttr('style');
                            $('.p1').css({'background-color':'green'});
                            $('.p2').css({'background-color':'white'});
                            $(".player2").attr("src","assets/paper.png");
                            $(".playerTwoLabel").html("Player 2: Paper");
                            $(".player1").attr("src","assets/scissors.png");
                            $(".playerOneLabel").html("Player 1: Scissors");
                        }
                    }
                }

                function tie(){
                    if (playerOne == rock && playerTwo == rock){
                        console.log("Rock & Rock TIE");
                        $('#result').html("Tie").css({'color':'red'});
                        $('.p1').css({'background-color':'yellow'});
                        $('.p2').css({'background-color':'yellow'});
                        $(".player1").attr("src","assets/rock.png");
                        $(".playerOneLabel").html("Player 1: Rock");
                        $(".player2").attr("src","assets/rock.png");
                        $(".playerTwoLabel").html("Player 2: Rock");
                    }else if (playerOne == paper && playerTwo == paper){
                        console.log("Paper & Paper TIE");
                        $('#result').html("Tie").css({'color':'red'});
                        $('.p1').css({'background-color':'yellow'});
                        $('.p2').css({'background-color':'yellow'});
                        $(".player1").attr("src","assets/paper.png");
                        $(".playerOneLabel").html("Player 1: Paper");
                        $(".player2").attr("src","assets/paper.png");
                        $(".playerTwoLabel").html("Player 2: Paper");
                    }else if (playerOne == scissors && playerTwo == scissors){
                        console.log("Scissors & Scissors TIE");
                        $('#result').html("Tie").css({'color':'red'});
                        $('.p1').css({'background-color':'yellow'});
                        $('.p2').css({'background-color':'yellow'});
                        $(".player1").attr("src","assets/scissors.png");
                        $(".playerOneLabel").html("Player 1: Scissors");
                        $(".player2").attr("src","assets/scissors.png");
                        $(".playerTwoLabel").html("Player 2: Scissors");
                    }
                }
                tie();
                comparePlayers();
            });
        }
    </script>
</body>
</html>