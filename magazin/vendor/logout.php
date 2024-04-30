<?php
session_start();
unset($_SESSION['cart']);
unset($_SESSION['message']);
unset($_SESSION['user']);
header('location: ../index.php');
?>