<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST ['email'];
    $password = $_POST ['password'];

    $check_user = mysqli_query($connect, "SELECT * FROM 'user' WHERE'login' = 'login' AND 'password'='$password'");
    if (mysqli_num_rows($check_user) > 0) {
         
    } else {
        $_SESSION ['message'] = 'Не верный логин или пароль';
        header ('Location: ../index.php');
    }
    
?>