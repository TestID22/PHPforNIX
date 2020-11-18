<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolean type</title>
</head>
<body>
    <p> <b>Boolean type </b> - простейший тип данных, значение которого ограничивается выражаються, (опрелеояются) истинностью <br>
    ложью. TRUE or FALSE
    </p>
    
    <!--TODO описание запилить к булёвкам и каст-->
    <?php
        //оперделние переменных
        $state = TRUE;
        $intToBoolean = 1;
        $arrayToBoolean = [];
        $strToBool = "";


        //каст к булевым переменным различных типов
        echo "Приводим int со значением $intToBoolean <br>".var_dump((Boolean) $state);

        var_dump((bool) $arrayToBoolean); 
        nextLine();
        var_dump((bool) -2);//отрицательное значение тоже TRUE
        nextLine();
        echo "Пустая строка вернёт = FALSE";
        var_dump((bool) ""); //пустая строка даёт FALSE
        echo "Строка с символами вепеёи = TRUE".nextline(); //конкатенация в PHP схожа с интерполяцией по смылсу из C#. 
        var_dump((Boolean) "Alex"); //строка с символами вернёт TRUE
    

        function nextLine(){
            echo "<br>";
        }

    ?>
</body>
</html>