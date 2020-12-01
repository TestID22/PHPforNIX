<?php
    $dataString = $_POST;
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