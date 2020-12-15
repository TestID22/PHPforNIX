<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/colormultiplyTable.css">
    <title>Multi table</title>
</head>
<body class="body">

<nav class="nav__multiply">
    <div class="back__btn">
        <a style="display: inline-block;
             padding: 10px 15px;
             border: 2px solid rgb(176,252,0);
             border-radius: 25px;
             margin-top: 10px;
             text-decoration: none;
             color: rgb(176,252,0);
             font-size: 16px;
             font-weight: bold;" href="../index.html">BACK</a>
    </div>
</nav>

<div class="m__table">
    <table border="2">
        <tr>
            <td><?php showMultyTable(1);?></td>
            <td><?php showMultyTable(2);?></td>
            <td><?php showMultyTable(3);?></td>
            <td><?php showMultyTable(4);?></td>
            <td><?php showMultyTable(5);?></td>
        </tr>
        <tr>
            <td><?php showMultyTable(6);?></td>
            <td><?php showMultyTable(7);?></td>
            <td><?php showMultyTable(8);?></td>
            <td><?php showMultyTable(9);?></td>
            <td><?php showMultyTable(10);?></td>
        </tr>

    </table>
</div>



<?php
    function showMultyTable($multuplier){
    for($i = 1;$i <= 10;$i++){
        colorized($multuplier, $i);
        }
    }

    function colorized($multiplier, $index){
        $colored = array(1 => "red", "green", "blue", "yellow", "aqua","brown", "darkblue","pink", "tomato", "violet");
        echo "<text style='color:$colored[$multiplier];'>$multiplier</text> x 
              <text style='color: $colored[$index]'>$index</text> = ";
        echo  colorizedResult($multiplier,$index) . "<br>";
    }

    function colorizedResult($multiplier, $index){
        $colors = array("lime", "red", "green", "blue", "yellow", "aqua","brown", "darkblue","pink", "tomato", "violet");
        $result = strval($multiplier * $index); //преобразование к строке
        for($i = 0; $i < strlen($result); $i++){
            $number_of_color = $result[$i];
            echo "<text style='color:$colors[$number_of_color];'>" .$result[$i]. "</text>";
        }
    }


?>

</body>
</html>