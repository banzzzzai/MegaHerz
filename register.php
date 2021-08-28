<?php
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    $passRep = filter_var(trim($_POST['passRep']), FILTER_SANITIZE_STRING);

    if (mb_strlen($name) < 1 || mb_strlen($name) > 90){
        echo "Недопустимая длина имени!";
        exit();
    }
    else if (mb_strlen($login) < 5 || mb_strlen($login) > 90){
        echo "Недопустимая длина логина! (от 6 до 90)";
        exit();
    }
    else if (mb_strlen($pass) < 5 || mb_strlen($pass) > 90){
        echo "Недопустимая длина пароля! (от 6 до 90)";
        exit();
    }
    else if ($pass != $passRep){
        echo "Пароли не совпадают!";
        exit();
    }

    $pass = md5($pass."abcde12345");

    $mysql = new mysqli ('localhost','mysql','mysql','register');
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES ('$login', '$pass', '$name')");

    setcookie('user', '$name', time() + 3600, '/');
    header('Location: userAccount.php');

    $mysql->close();
?>

