<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conrol Flow</title>
</head>
<body>
    <h1>Control Flow Управляющие конструкции</h1>
    <p>
        <ol>
            <p><b>Ветвление</b></p>
            <li>if, elseif, else</li>
            <li>switch</li>
            <br>
            <p><b>Циклы</b></p>
            <li>while</li>
            <li>do - while</li>
            <li>for</li>
            <li>foreach</li>
        </ol>
    </p>

    <?php
        $name = "Alex";
        echo "<hr>";
        echo "if принимает выражение, и если оно True выполняется инструкция, если есть многовариантность логики, то выполняется следующая интсрукция<br>
        else выполниться когда все выражения в if равно false";        
        if($name == "Alex"){ //Регистр имеет значение.
            echo "Имя Алекс<br>";
        }elseif($name == "John"){
            echo "ДЖОНИ!";
        }else{
            echo "Без имени";
        }
        echo "<hr>";
        
        
        //switch 
        switch($name){
            case "alex":
                echo "Алекс с маленькой буквы";
            break;
            case "Alex":
                echo "Alex с большой";
            break;
            default:
                echo "выполниться если нет верного выражения";
        }
        echo "<hr>";

        //циклы
        $num_iter = 0;
        while($num_iter < 10){
            $num_iter++;
            echo "считаю до 10 - [$num_iter]<br>";
        }
        echo "<hr>";
        //цикл for
        echo 'Вывод циклом for массива $arr_name '."<br>";
        $arr_name = ["Alex - 1", "Johny -2 ",7];
        for($i = 0; $i < count($arr_name); $i++){
            echo "$arr_name[$i] <br>";
        }
        echo "<hr>";
        
        //foreach
        echo "Вывод foreach<br>";
        foreach($arr_name as &$value){
            echo $value .= " <b>cтрока добавленная из цикла foreach</b><br>";
        }


    ?>
</body>
</html>