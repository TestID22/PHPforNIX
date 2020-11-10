<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTypes</title>
</head>
<body>
    <h1>Типы даных в PHP</h1>
    <hr>
    <?php 
    $int_type = 1;
    var_dump($int_type);
    echo "<br>";
    $float_type = 3.14;
    var_dump($float_type);
    echo "<br>";
    $string_type = "Hello World";
    var_dump($string_type);
    echo "<br>";
    $boolean_type = TRUE;
    var_dump($boolean_type);
    echo "<br>";

    $object_type = new stdClass();
    $object_type->name = "Alex";
    var_dump($object_type);
    echo "<br>";
    echo $object_type->name;
    echo "<br>";

    $array_full_type = array(1,2,10);
    $array_short_type = ["Frodo", "Legolas"];
    echo "Второй элемент массива =".$array_full_type[1]."<br>";
    echo "Первый элемент массива = ".$array_short_type[0]."<br>";
    var_dump($array_full_type);


    ?>
    <hr>
</body>
</html>