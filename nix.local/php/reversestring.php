<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Reverse My String</title>
</head>
<style>
    .links {
        color: rgb(176, 252, 0);
        display: inline-block;
        padding: 10px 15px;
        margin-bottom: 25px;
        margin-top:15px;
        text-transform: uppercase;
        border: 2px solid rgb(176,252,0);
        border-radius: 26px;
        font-weight: bold;
    }
    .links:hover{
        background: rgb(156,252,0);
        color: #181515;
        font-weight: bold;
    }

</style>
<body style="text-align: center;">
    <a class="links" href="../index.html">back</a><br>


<?php
    $dataString = $_POST["reverse"];
    if($dataString == ''){
    echo "Введите строку для переворота<br>";
    var_dump($dataString);
    }
    echo  "<text style='color: whitesmoke;'>" .strrev($dataString). "</text><br>";
    echo "<hr><text style='color: cornsilk'> Тут самописные переворотчик строки ака (реверсер)</text><br>";
    echo customReverseString($dataString);




    function customReverseString($str){
    $reversString = $str;
    for($i = strlen($str) - 1; $i >= 0;$i--){
        echo  "<text style='color: rgb(176, 252, 0)'>" . $reversString[$i] . "</text>";
    }
}

?>
</body>
</html>
