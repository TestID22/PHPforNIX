<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teseract</title>
</head>
<body>
    <h1>Правила именования переменных</h1>
    <b>1.Переменные начинаются со знака $</b><br>
    <b>2.В переменных не может быть пробела</b><br>
    <b>3.Переменные не могут начинатся с цифры</b><br>
    <!-- <br> - перенос строки -->
    <?php 

    //переменные начинаются с $, присвоение это знак "=", нельзя использовать в именовании пробелы. Нельзя чтоб переменная начиналась с цифры.
    $nameAlex = "Alex";
    //авто каст из одного типа в другой динамически
    $largeNum = 123123123123123123123123;

    drawLine();
    //конкатенация это символ точки
    echo "1. Hello" . " world<br>";

    print("gello<br>");
    //форматируемый вывод через функцию printf 
    printf("%s", $nameAlex."<br>"); //форматный вывод
    drawLine();

    //ветвление
    if($nameAlex = "Alex"){
        echo "Твоё имя ". "$nameAlex<br>";
    }
    
    //cntrol flow
    switch($nameAlex){
        case "Alex":
            echo "Свич первый тут ";
        break;
        case "Harry":
            echo "Harry";
        break;
        default:
    }

    //функции
    function drawLine(){
        echo "<br> ----------------------------<br>";
    }
    //области видимости - 1. Глобальная - 2.Локальная
    $global = "глобальная переменная";
    function showName($name){
        $local = "локальная переменная";
        echo "<br>$name";
    }

    drawLine();
    showName($nameAlex);
    drawLine();

    //функция возвращает через return
    function add($a, $b){
        $result = $a + $b;
        return $result;
    }

    drawLine();
    echo "тут тест функции <br>".add(2, 3). " - результат";
    drawLine();
    var_dump($largeNum);

    ?>

</body>
</html>