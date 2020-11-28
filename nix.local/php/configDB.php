<?php
    //TODO переписать под PDO
    $connection = mysqli_connect("localhost", "root", "");
    $selcet_db = mysqli_select_db($connection, "tasks_sql");
?>