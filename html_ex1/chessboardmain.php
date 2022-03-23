<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
</head>
<style>
    td {
        height: 50px;
        width: 50px;
    }
    td.dark{
        background: #aaa;
    }
    td.light{
        background: #eee;
    }
    body{
        font-family: Courier New;
        font-size: 8pt;
    }
    .ChessboardTable{
        border-collapse:collapse;
    }
    .ChessboardTable th:first-child, .ChessboardTable td:last-child { 
        border-right: 1px solid #000; 
    }
    .ChessboardTable th + th { 
        border-bottom: 1px solid #000; 
    }
    .ChessboardTable tr:last-child td {
         border-bottom: 1px solid; 
    }
    .ChessboardTable th:empty { 
        border: none; 
    }
    th{
        padding: 10px;
    }
</style>
<body>
    <?php include ("backtomain.php");?>
    <h1>Chessboard</h1>
    <table class="ChessboardTable">
        <tr>
            <th></th>
            <th>a</th>
            <th>b</th>
            <th>c</th>
            <th>d</th>
            <th>e</th>
            <th>f</th>
            <th>g</th>
            <th>h</th>
        </tr>
        <tr>
            <th>8</th>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
        </tr>
        <tr>
            <th>7</th>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
        </tr>
        <tr>
            <th>6</th>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
        </tr>
        <tr>
            <th>5</th>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
        </tr>
        <tr>
            <th>4</th>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
        </tr>
        <tr>
            <th>3</th>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
        </tr>
        <tr>
            <th>2</th>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
        </tr>
        <tr>
            <th>1</th>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
            <td class="dark"></td>
            <td class="light"></td>
        </tr>
    </table>
</body>
</html>