<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Основные функции Arrays</title>
</head>
<body>
    <h1>Basic function when working with functions</h1>
    <p> Основный функции работы с массивами</p>
    <p> Есть несколько видов массивов</p>
        <ol>
            <li>Одноранговый массив</li>
            <li>Динамческий - не задаём размер вначале, а он изменяется во время работы скрипта<br>
            Для добавления динамического массива, мы просто назначаем новую переменную в динамический массив $dynamic_array[] = newelement
            </li>
        </ol>
        <ol>
            <li>Функция is_array() проверяет, является ли переменная массивом, и если является, то возвращает true, иначе возвращает false. Например:</li>
            <li>Функция count() и sizeof() получают количество элементов массива:</li>
            <li>Функция shuffle перемешивает элементы массивы случайным образом</li>
            <li>Функция compact позволяет создать из набора переменных ассоциативный массив, где ключами будут сами имена переменных</li>
            <li>Usort() - сортирует массив по значениям</li>
            <li>Imlode() - объединяет эллементы массива в <b>СТРОКУ</b></li>
            <li>sort() - </li>
            <li>rsort() - reverser sort -сортирует массив в обратном порядке</li>
            <li></li>
            <li></li>       
        
        
        </ol>
        <hr>
    <?php 
    $asosiated_array = array(1=>"first", "second" => "sec");
    $test_array = array(112, 'alex', "elliot", 100);
    $dynamic_array[]  = "first_element";
    $dynamic_array[]  = 2;

    echo "strange" . nextLine();

    echo is_array($test_array).nextLine();

    echo count($test_array).nextLine();
    echo "Размер динамческого массива " . count($dynamic_array).nextLine();

    foreach($asosiated_array as $key => $value){
        echo "[$key] => $value" . nextLine();
    }





    function nextLine(){
        echo "<br>";
    }

    ?>
</body>
</html>