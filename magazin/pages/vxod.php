<!DOCTYPE html>
<?php  session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Andika:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="../CSS/forma.css">
    <title>Вход</title>
</head>
<body>
    <main>
        <div class="circle"> </div>
        <div class="register-form-container">
            <h1 class="form-title"> Авторизация</h1>
            <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?> 
            <form method="post" action="../vendor/sing.php">
            <div class="form-fields">
                <div class="form-field">
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="form-field">
                    <input type="password" name="password" placeholder="Пароль">
                </div>
               
    
            </div>
            <div class="form_butons">
            <button type="submit" class="button button-google">Авторизоваться</button>
            </div> 
   </form>
        </div>
        
        </main>
        
</body>
</html>