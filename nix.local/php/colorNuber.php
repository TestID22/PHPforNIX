<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/multiplyTable.css">
    <title>Multi table</title>
</head>
<body class="body">

<nav class="nav__multiply">
    <div class="back__btn">
        <a href="../index.html">BACK</a>
    </div>
</nav>

<div class="m__table">
    <table border="2">
        <tr style="font-size: 26px">
            <?php coloredNumber();?>
        </tr>
    </table>
</div>



<?php
    function coloredNumber()
    {
        $coloredNumber = array(1 => "red", "green", "blue", "yellow", "");
        for ($i = 1; $i < count($coloredNumber) + 1; $i++) {
            echo "<text style='color:$coloredNumber[$i]; font-size: 26px;'>$i</text>";
        }
    }
?>

</body>
</html>