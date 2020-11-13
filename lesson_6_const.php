<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Const</title>
</head>
<body>
    <h1>Константы</h1>
    <p><b>Константы</b> - это имя(не переменная) для значения, которое не может быть изменнено во время выполнения программы.<br>
    - <b> Определяется </b> функцией define() или ключевым словос const<br>
    - <b> Имя </b>пишется по соглашению в верхнем регистре.<br>
    - <b> Вызов </b> константы производится по имени, без знака $;<br>
    - <b>Область видимости </b> - констант глобальная, т.е. к константе имеем доступ даже из локальной области видимости.<br>
     
    </p>
    <?php
    //Определение константы через функцию define
    define("NAME", "Alex");
    //Определение через ключевое слово const
    const CONSTANT = "ALEX22";


    //определение локальной области видимости
    function localScope(){
        echo "<b> Тут вызов КОНСТАНТЫ ".NAME."</b><br>";
        echo CONSTANT;
    }


    localScope();
    ?>
</body>
</html>