<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gallery</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/gallery.css">
    <script type="text/javascript" src="scripts/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="scripts/gallery.js"></script>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header_inner">
            <div class="logo">
                Галерея
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

    <div class="gallery">
        <ul>
            <li><img src="img/1.jpg" onclick="Show(1)"></li>
            <li><img src="img/2.jpg" onclick="Show(2)"></li>
            <li><img src="img/3.jpg" onclick="Show(3)"></li>
            <li><img src="img/4.jpg" onclick="Show(4)"></li>
        </ul>
        <ul>
            <li><img src="img/5.jpg" onclick="Show(5)"></li>
            <li><img src="img/6.jpg" onclick="Show(6)"></li>
            <li><img src="img/7.jpg" onclick="Show(7)"></li>
            <li><img src="img/8.jpg" onclick="Show(8)"></li>
        </ul>
        <ul>
            <li><img src="img/9.jpg" onclick="Show(9)"></li>
            <li><img src="img/10.jpg" onclick="Show(10)"></li>
            <li><img src="img/11.jpg" onclick="Show(11)"></li>
            <li><img src="img/12.jpg" onclick="Show(12)"></li>
        </ul>

    </div>
    <div class="main">
        <div class="content_gallery">
            <button class="btn_close"><img src="img/close.png" width="40" alt=""></button>
            <div class="main_gallery">
                <div class="buttons" onclick="Leftclick()">
                    <button><img class="but" src="img/leftArrow.png"></button>
                </div>
                <div class="photo">
                    <img id="main_img" >
                </div>
                <div class="buttons" onclick="Rightclick()">
                    <button><img class="but" src="img/rightArrow.png"></button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>