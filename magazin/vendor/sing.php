<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['email'];
    $password = $_POST['password'];
    
    $check_user = mysqli_query($connect, "SELECT * FROM `persons` WHERE`email` = '$login' AND `password`='$password'");
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION ['user'] = $user;
        header ('Location: ../index.php');
    } else {
        $_SESSION ['message'] = 'Не верный логин или пароль';
        header ('Location: ../pages/vxod.php');
    }
    
?>