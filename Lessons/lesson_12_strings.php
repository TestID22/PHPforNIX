<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h1>Строки</h1>
    <p><b>Работа со строками, и основные функции строк.</b>
        <ol>
            <li>strlen() - возвращает длину строки .т.е. количество текстовых символов.</li>
            <li>substr() - возвращает подстроку.</li>
            <li>explode() - разбивает строку с помощью разделителя на переменные, возвращает массив</li>
            <li>parse_str - Разбирает строку str,которая должна иметь формат строки запроса URL и присваивает значения переменным в текущем контексте, если не передан второй аргумент arr. В последнем случае значения будкт сохранены в этой переменной как элементы массива.  </li>
            <li>strrev() - переворачивает строку</li>
            <li>trim() - удаляет пробелы или другие символы из начала и конца строки</li>
            <li>str_split() - разбивает строку на символы, вернёт массив</li>
        </ol>
    </p>
    
    <?php
    $hacker_name = "Elliot";
    $string_for_explode = "elliot darling cisko"; //кастит к массиву
    $fsociety = explode(" ", $string_for_explode);
    echo $fsociety[1] . "<br>";
    echo var_dump($fsociety) ."<br><hr>";

    echo "Кол-во символов в \$hacker_name " . strlen($hacker_name) . "<br>";

    echo strrev($hacker_name) . "<br>";
    
    $chars_hacker_name = str_split($hacker_name);
    echo $chars_hacker_name[1] . $chars_hacker_name[3];

    ?>
</body>
</html>