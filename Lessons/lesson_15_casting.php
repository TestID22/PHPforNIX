<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Приведение типов</h1>
    <p>Основные функции при работе с разными типами данных</p>
    <p>
        <ol>
            <li>gettype() — Возвращает тип переменной</li>
            <li>empty() — Проверяет, пуста ли переменная</li>
            <li>is_null() — Проверяет, является ли значение переменной равным NULL </li>
            <li>isset() — Определяет, была ли установлена переменная значением, отличным от NULL</li>
        </ol>
    
    </p>
    <?php
        $emp_str = '';
        $string_type = "alex";
        $int_type = 15;
        $null_str;

        echo gettype($string_type) . "  " .gettype($int_type) . "<br><hr>";

        echo "работа функции empty() ------> " . var_dump(empty($string_type)). "<br>" .str_repeat("------", 10) . "<br>";
        
        echo var_dump(is_null($string_type)). " ---> результат is_null<br>";

        echo var_dump(isset($emp_str)). "<br>";
        echo var_dump(isset($string_type)). "<br>";
        echo var_dump(isset($null_str)). "<br>";

    ?>
</body>
</html>