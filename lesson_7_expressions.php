<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressions</title>
</head>
<body>
    <h1>Выражения</h1>
    <p><b>Выражениями </b> в PHP считается почти всё, что мы пишем, основные элементы выражений это константы и переменные.<br>
    <hr>
    Постфиксный, префиксный - инкремент и декримент.<br>
    Префиксный инкремент - сперва увеличивает переменную, а потом записывает результат.<br>
    Постфиксный инкремент - записывает, в следующую итерацию увеличивает.<br>
    <hr>
    Префиксный декримент - сперва уменьшает переменную, а потом записывает результат<br>
    Постфиксный декримент - записывает, в следующую итерацию уменьшает.
     

    </p>
    <?php
    $postfix_inc = 1;  
    $postfix_var = $postfix_inc++;  

    $prefix = 1;
    $prfix_var = ++$prefix;
    echo $postfix_var . "<br>";
    echo $prfix_var;
    echo "<hr>";
    $prefix_dec = 1;
    $prefix_dec_var = --$prefix_dec;

    $postfix_inc = 10;
    $postfix_inc_var = $postfix_inc++;
    
    echo $prefix_dec_var . "<br>";
    echo $postfix_inc_var;
    ?>
</body>
</html>