<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIX solutions here</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--Блок шапки-->
    <header>
        <div class="logo">
            <h2>[ LOGO ZOMBIE CODERS ]</h2>
        </div>
        <!--навигация TODO сверстать-->
        <nav>
            <ul class="nav__links">
                <li><a href="#">LESSON 1</a></li>
                <li><a href="#">LESSON 2</a></li>
                <li><a href="#">LESSON 3</a></li>
                <li><a href="#">LESSON 4</a></li>
            </ul>
        </nav>
    </header>

    <div class = "nix__box">
        <div class = "nix__logo">
            <article>"Hello, <b><span class="nix__green_logo">NIX</span> Education</b>”</article>
        </div>
        <div class="github__pict">
            <a href="https://github.com/septemberEatMe"><img src="img/Octocat.png" width= "70" alt="github__link" title="Мой GitHub"></a>
        </div>
    </div>
    <!--Тут контент Формы контент-->
    <main>
        <form class="box" action="php/add.php" method="POST">
            <h1>ZOMBIE <span class="coders">CODERS</span> Tasks</h1>
            <input type="text" name="task" id = 'task' placeholder="enter yours tasks here..."><br>
            <button type="submit" name = "sendTask">send</button>
        </form>
    </main>

    <?php
        require 'php/configDB.php';

        echo '<ul>';
        $query = $pdo->query('SELECT * FROM "zombie_tasks"');
        //TODO ERRRRROOORRR
        while($row = $query->fetch(PDO::FETCH_OBJ)){
            echo "$row<br>";
        }
        echo '</ul>';
    ?>

    <footer>

    </footer>
</body>
</html>