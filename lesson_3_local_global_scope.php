<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    $globalString = "Это строка в глобальной области видимости";
    echo $globalString."<br>";
    
    function localFunction(){
        global $globalString;
        return $globalString . "это доступ из локальной в глобальную";
    }
    echo localFunction();
    ?>
</body>
</html>