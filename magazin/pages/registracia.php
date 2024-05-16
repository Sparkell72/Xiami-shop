<?php
    session_start();
    if ($_SESSION['persons']) {
        header('Location: profile.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Andika:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="../CSS/forma.css">
    <title>Регистрация</title>
</head>
<body>
<form action="../vendor/signup.php" method="post"> 
    <main>
        
            <div class="circle"> </div>
            <div class="register-form-container">
                <h1 class="form-title"> Регистрация</h1> 
                <div class="form-fields">
                    <div class="form-field">
                        <input type="text" name="name" placeholder="Имя">
                    </div>
                    <div class="form-field">
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="form-field">
                        <input type="text" name="password" placeholder="Пароль">
                    </div>
                    <div class="form-field">
                        <input type="text" name="password_confirm" placeholder="Подтвердите Пароль">
                    </div>
        
                </div>

                <div class="form_butons">
            <button type="submit" class="button button-google">Зарегистрироваться</button>
            </div> 
   
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
                 
                    <p>
            У вас уже есть аккаунт? - <a href="../pages/vxod.php">авторизируйтесь</a>!
        </p>
            </div>
            
            
        
        

        </main>
</form>    
</body>
</html>