<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work With Forms</title>
</head>
    <H1>Работа с формами</H1>
    <p><b>Работа с формами очень важна</b>
    Через форму передаются значения, с которыми мы будем работать в наших скриптах, <br>
    Значения, приходят из суперглобальных переменных $_POST;


    </p>

<body>
    <?php
             echo "Hello ," .$_POST["name"]. "<br>";
             echo (int)$_POST('age')."<br>";
             echo $_SERVER;
    ?>
</body>
</html>