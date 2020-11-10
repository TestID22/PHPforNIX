<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Области видимости в PHP</h1>
    <p><b>Области видимости </b> делятся на 2 типа - это Глобальные и Локальные <br>
    Глобальная область видимости - подразумевает доступ к переменным из любомго места в скрипте.<br>
    Локальня область - к переменным можно получить доступ только внутри функции.<br>
    Ключевое слово global даёт доступ к глобальным переменным из функции, т.е. из локальной области.
    </p>

    <?php 

    $globalString = "Это строка в глобальной области видимости";
    echo $globalString."<br>";
    
    function localFunction(){
        global $globalString;
        $localVariable = "Локальная переменная";
        return $globalString . " это доступ из локальной в глобальную ". $localVariable;
    }
    echo localFunction();

    ?>
</body>
</html>