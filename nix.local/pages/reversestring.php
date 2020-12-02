<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<?php
    $dataString = $_POST['revString'];
    if($dataString == ''){
    echo "Введите строку для переворота";
    }
    echo  strrev($dataString). "<br>";
    echo "<hr>";
    echo customReverseString($dataString);




    //TODO check this func PLEASE rewrite this bad function
    function customReverseString($str){
    $reversString = $str;
    $stringLength = strlen($str);
    for($i = ($stringLength - 1); $i > 0;$i--){
        echo  $reversString[$i];
    }
}

?>
</body>
</html>
