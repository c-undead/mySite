<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Филькин сайт</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header_inner">
            <div class="logo">
                Филькин сайт
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
<div class="intro">
    <div class="container">
        <div class="intro_inner">
        <a class="welcome">
            <?php if (isset($_COOKIE['user'])) {
                echo("ну здарова, ".$_COOKIE['user']);
            }
            else {
                echo("привет, залогинься");
            }
            ?>
            </a>
            <h2 class="intro_suptitle">Чорт с МОАИС-О-20/1</h2>
            <h1 class="intro_title">Филя Ерёмин  </h1>
            <a class="btn" href="https://vk.com/c_undead" target="_blank">ВК</a>
        </div>
    </div>
</div>
</body>
</html>