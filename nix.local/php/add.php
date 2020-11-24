<?php
    //TODO: добавить инструкцию вывода ощибок
    //принимаем данные от пользователя
    $task = $_POST["task"];
    //проверка данных из таска
    if($task == ''){
        echo "Введите таск<br>";
        exit();
    }
    echo $task;
    //работа с БД
    require 'configDB.php';

    $sql = 'INSERT INTO zombie_tasks(task) VALUES(:task)';
    $query = $pdo->prepare($sql); //подготовка запроса, этот код не вызывается
    $query->execute(['task' => $task]);

    header('Location: /dashboard/nix.local/'); //перенаправление redirect
    
?>