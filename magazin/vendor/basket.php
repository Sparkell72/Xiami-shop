<?php
    session_start();
    if(isset($_SESSION['user'])){
       
        if(isset($_SESSION['cart'])){
            $verification = true;
            foreach($_SESSION['cart'] as $product){
                if($product['id'] == $_GET['id']){
                    $verification = false;
                }
            }
            if($verification){
                $ArrayNow = $_SESSION['cart'];
                $AddProduct = array(
                    "id" => $_GET['id'],
                );
                array_push($ArrayNow, $AddProduct);
                $_SESSION['cart'] = $ArrayNow;
            }
        }
        else {
            $array = array(
                0 => array(
                    "id" => $_GET['id'],
            ));
            $_SESSION['cart'] = $array;
        }

        header('Location: ../pages/korzuna.php'); 
    }else{
        header('Location: ../pages/registracia.php');
    }
?>