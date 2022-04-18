<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript</title>
    <!-- <script src="./script.js"></script> -->
    <script>
        var calculator = {
            num1: 0,
            num2: 0,
            add: function(){
                return this.num1 + this.num2;
            },
            subract: function(){
                return this.num1 - this.num2;
            },
            multiply: function(){
                return this.num1 * this.num2;
            },
            divide: function(){
                return this.num1 / this.num2;
            }
        };

        function getName (){
            console.log("louch");
        }

        function getNameReturn(){
            return ("louchin");
        }

        var arrObj = [
            "lvc",
            "lvcc",
            "lvccc",
            "lvc",
            "lvcc",
            "lvccc",
            "lvc",
            "lvcc",
            "lvccc",
            "lvc",
            "lvcc",
            "lvccc",
            "lvc",
            "lvcc",
            "lvccc"
        ];

        for (let index = 0; index < arrObj.length; index++) {
            console.warn(arrObj[index]);
        }

        var finalString = "";
        for (let index = 0; index < arrObj.length; index++) {
            finalString = finalString + "*";
            console.warn(finalString);  
        }

        var arrChessBoard = [
            ['A', 'B', 'C'],
            ['D', 'E', 'F'],
            ['G', 'H', 'I']
        ];

        for (let index = 0; index <= 100; index++) {
            if(index % 2==0){
                console.warn(index + " this is an even number");
            }
            else{
                console.warn(index + " this is an odd number");
            }
        }

        // var arrObj = [
        //     "lvc",
        //     1,
        //     true
        // ];

        // arrObj.push - add last
        // arrObj.pop - remove last
        // arrObj.shift - remove first
        // arrObj.unshift - add first
    </script>
</head>
<body>
    <input type="text" id="name">
    <button onclick="sayMyName();">Click Me!</button>
</body>
</html>