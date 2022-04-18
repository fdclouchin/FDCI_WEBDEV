<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function calcFibo () {
            let inputNum = document.getElementById('limit').value;
            let n1 = 0,
            n2 = 1,
            nextTerm;
            
            // do fibonacci
            for (let iFibo = 0; iFibo < inputNum; iFibo++) {
                console.log(n1);
                document.getElementById("output").innerHTML += "Sequence No.: " + iFibo + " = " + n1 + "<br>";
                nextTerm = n1 + n2;
                n1 = n2;
                n2 = nextTerm;
            }           
        }

        function checkQuarantine () {
            let inputAge = document.getElementById('age').value;
            var string1 = "you are too young. stay inside!";
            var string2 = "you are too old. stay inside!";
            var string3 = "Go forth minion!";
            var string4 = "this is an invalid number";

            if(inputAge <21){
                console.warn(string1);
                document.getElementById("demo").innerHTML = string1;
                document.getElementById("output_age").innerHTML = inputAge;
            }
            else if(inputAge >65){
                console.warn(string2);
                document.getElementById("demo").innerHTML = string2;
                document.getElementById("output_age").innerHTML = inputAge;
            }
            else if(inputAge >=21 && inputAge<=65){
                console.warn(string3);
                document.getElementById("demo").innerHTML = string3;
                document.getElementById("output_age").innerHTML = inputAge;
            }
            else if(typeof inputAge =='string'){
                console.warn(string4);
                document.getElementById("demo").innerHTML = string4;
                document.getElementById("output_age").innerHTML = inputAge;
            }
            else{
                console.err("this is an error");
            }
        }
    </script>
</head>
<body>
    <h1>Check fibonacci</h1>
    <input type="text" id="limit">
    <button onclick="calcFibo()">calculate range</button>
    <div id="output"></div>
    
    <h1>Check Quarantine</h1>
    <div style="width: 200px;">
        <b>
        21 -> lower
        <br>
        ouput -> you are too young. stay inside!
        <br>
        65 -> higher
        <br>
        output -> you are too old. stay inside!
        <br>
        >21 and < 65 -> Go forth minion!
        </b>
    </div>
    <input type="text" id="age">
    <button onclick="checkQuarantine()">calculate range</button>
    <div id="output_age"></div>
    <div id="demo"></div>
</body>
</html>