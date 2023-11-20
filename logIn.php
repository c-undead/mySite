<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/logIn.css">
</head>
<body>
<?php
        if($_COOKIE['user'] == ''):
?>
<header class="header">
    <div class="container">
        <div class="header_inner">
            <div class="logo">
                login
            </div>
            <nav class="nav">
                <a class="nav_link" href="index.php">Главное меню</a>
                <a class="nav_link" href="about.html">Обо мне</a>
                <a class="nav_link" href="gallery.php">Галерея</a>
                <a class="nav_link" href="logIn.php">Войти</a>
                <a class="nav_link" href="reg.php">Регистрация</a>
            </nav>
        </div>
    </div>
</header>
<div class="intro_log">
    <div class="container_log">
        <div class="row">
        </div>
            <div class="col">
                <form action="templates/auth.php" method="post">
                    <h1>Авторизация</h1>
                    <div class="reg-group">
                        <label>Имя пользователя</label>
                        <input type="text" name="login">
                    </div>
                    <div class="reg-group">
                        <label>Пароль</label>
                        <input type="password" name="password">
                    </div>
                    <div class="reg-group">
                        <button>Авторизоваться</button>
                    </div>
                </form>
            </div>
            <?php else:?>
                <p>Ну здарова, <?=$_COOKIE['user']?>. Чтобы выйти жмякни <a href="templates/exit.php">сюда</a></p>
                <p>Чтобы вернуться на сайт нажми <a href="index.php">здесь</a></p>
            <?php endif;?>
            </div>
            </div>  
    </div>
</div>
</body>
</html>