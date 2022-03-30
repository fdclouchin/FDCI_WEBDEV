<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Offline -->
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>
        .debug{
            height: 100px;
            border: 1pt solid red;
        }

        .testonly{
            border: 1pt solid orange;
        }
    </style>
</head>
<body>
    <div class="debug container-fluid">
        
        <div class="debug row row-cols-5">
            <div class="col testonly">1</div>
            <div class="col testonly">2</div>
            <div class="col testonly">3</div>
            <div class="col testonly">4</div>
            <div class="col testonly">5</div>
            <div class="col testonly">6</div>
            <div class="col testonly">7</div>
            <div class="col testonly">8</div>
            <div class="col testonly">9</div>
            <div class="col testonly">10</div>
        </div>

        <div class="debug row">
            <div class="col testonly">1</div>
            <div class="col testonly">2</div>
        </div>

        <div class="debug row">
            <div class="col testonly">1</div>
            <div class="col testonly">2</div>
            <div class="col testonly">3</div>
            <div class="col testonly">4</div>
        </div>

        <div class="debug row">
            <div class="col-4 testonly">1</div>
            <div class="col-5 testonly">2</div>
            <div class="col-1 testonly">3</div>
        </div>

        <div class="debug row">
            <div class="col testonly">2</div>
            <div class="col-10 testonly">1</div>
            <div class="col testonly">2</div>
            <div class="col testonly">3</div>
        </div>
    
        <div class="row">
            <div class="debug col-sm-6 col-md-2">zoom</div>
            <div class="debug col-sm-6 col-md-2">zoooooom</div>
        </div>
        <a href="test1.php">TEST 1</a>
    </div>
        
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
                navbar
            </div>
        </div>
    </div>
</body>
</html>