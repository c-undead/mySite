<?php
    $login = filter_var(trim($_POST['login'])) ;
    $mail = filter_var(trim($_POST['email'])) ;
    $password = filter_var(trim($_POST['password'])) ;
    if(mb_strlen($login) <= 5 || mb_strlen($login) >= 20 ) {
        echo "Недопустимая длина логина";
        exit();
    } else if(mb_strlen($password) <= 8 ) {
        echo "Пароль должен содержать минимум 8 символов";
        exit();
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Неверный E-Mail!";
        exit();
    }
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $dbconn = pg_connect("host=localhost port=5432 dbname=site user=postgres password=admin");
    $result = pg_query($dbconn, "INSERT INTO users(login, mail, password) VALUES('{{$login}}', '{{$mail}}','{{$password_hash}}')");
    pg_close($dbconn);
    header('Location: /');
?>