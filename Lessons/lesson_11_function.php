<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h1>Функции в PHP</h1>
    <p><b>Функции в ПХП </b>
    Основная задача функций заключается в избижании избыточного кода<br>
    PHP поддерживает обращения к функциям через переменные <br>
    
    . Это означает, что если к имени переменной присоединены круглые скобки, PHP ищет функцию с тем же именем, что и результат вычисления переменной, и пытается ее выполнить.<br>
     Эту возможность можно использовать для реализации обратных вызовов, таблиц функций и множества других вещей. 
    
    </p>
    <?php
    $is_run = TRUE;
    $add_result = add(2,5);
    echo $add_result ."<br>";
    //вызов функции по флагу тру
    if($is_run){
        simple("hello world");
    }
    
    
    //определение функций
    function simple($input){
        echo "$input";
    }

    function add($firtstVar, $secondVar){
        return $firtstVar + $secondVar;
    }


    ?>
</body>
</html>