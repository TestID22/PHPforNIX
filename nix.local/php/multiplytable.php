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
<body>
<div class="m__table">
    <table border="1">
     <?php
            $rows = 10;
            $cols = 5;
                for($tr = 1; $tr <= $rows;$tr++) {
                    echo "\t\t<tr>\n";
                    for($td = 1; $td <= $cols;$td++){
                        echo "\t\t<td>{$td} x {$tr} = ".$td * $tr ."</td>\n";
                    }
                    echo "</tr>\n";
                }
    ?>
</div>

</table>
</body>
</html>