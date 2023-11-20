<?php
    $login = filter_var(trim($_POST['login'])) ;
    $password = filter_var(trim($_POST['password'])) ;


    $dbconn = pg_connect("host=localhost port=5432 dbname=site user=postgres password=admin");
    $result = pg_query($dbconn, "SELECT * FROM users WHERE login = '{{$login}}'");
    $user = pg_fetch_assoc($result);
    if($user == NULL){
        echo "Пользователь не найден";
        exit();
    }
    if(password_verify($password, $user["password"])){
        echo("Неверный пароль!");
        exit();
    };
    setcookie('user', $user['login'], time() + 36, "/");
    pg_close($dbconn);
    header("location: /logIn.php");
?>
