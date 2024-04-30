<!DOCTYPE html>
<?php
session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Andika:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
   
   <script src="https://kit.fontawesome.com/3d0e27e432.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

   
   
   <meta charset="utf-8">
  <title>Интернет-магазин</title>
  <style>
   .line {
    border-bottom: 1px solid 	#808080; /* Параметры линии */
   }
  </style>
   
</head>
<body>
        <div class="Header">
            
            <div class='logohead'>
                <a href="../index.php">
                <img src="../image/logo.png"/>
                </a>
            </div>
            
            <div class='nav'>
                
                <a class = 'nav-item' href="./pages/map.php">АДРЕС</a>
                <a class = 'nav-item' href="#"></a>ЦЕНЫ</a>
                <a class = 'nav-item' href="@"></a>ТОВАРЫ</a>
                <a class = 'nav-item' href="./pages/map.php"></a>ОТЗЫВЫ</a>
        
            </div>
            <?php if(isset($_SESSION['user'])){?>
                <div class="registracia">
                <a href="../vendor/logout.php" class="btn btn-white btn-animate">Выйти</a>
            </div>
            <div class="vxod">
                <a href="korzuna.php" class="btn btn-white btn-animate">Корзина</a>
            </div>
        <?php }else{?>
            <div class="registracia">
                <a href="./pages/registracia.php" class="btn btn-white btn-animate">Регистрация</a>
            </div>
            <div class="vxod">
                <a href="./pages/vxod.php" class="btn btn-white btn-animate">Войти</a>
            </div>
        
        <?php }?>
           

            </div>    

        <main>
        <div class="container">
   <h1 class="title11">Корзина</h1>
  <div class="br">
    <table class="basket">
    <thead>
            <tr class="font15">
                <th></th>
                <th>Название</th>
                <th>Тип товара</th>
                <th>Количество</th>
                <th>Стоимость</th>
                <th></th>
            </tr>
        </thead>
<?php 
require_once '../vendor/connect.php';
if (isset($_SESSION['cart'])) {
    $count = 0;
    foreach ($_SESSION['cart'] as $item) {
        $id = $item['id'];

        $product = mysqli_query($connect, "SELECT * FROM `product` WHERE `id` = '$id'");
        while ($row = mysqli_fetch_assoc($product)) {
            $count+=$row['price'];
?>
       
        <tbody>
            <tr>
                <td><img class="backet_img" width="140" height="140" src="../image/<?php echo $row['imgfale']?>" alt=""></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['manefacter']?></td>
                <td>1</td>
                <td><?php echo $row['price']?> руб</td>
                <td><a href="../vendor/del.php?delete=<?php echo $row['id']?>"><img width="50" height="60" src="../image/bin_.svg" alt=""></a></td>
            </tr>
        </tbody>
    
<?php
}
}
}
 ?>
 </table>
 </div>
 <?php if ($count == 0) {
    echo "  
        <h1 class=\"title11\">Корзина пуста</h1>
      ";
} else { ?>
 <form class="order_form" method="post" action="">
    <label>Имя:</label>
    <input type="text">
    <label>Номер телефона:</label>
    <input type="text">
    <label>Email:</label>
    <input type="text">
    <label>Цена заказа: <?php echo $count?> руб</label>
    <button class="order_button">Оформить заказ</button>
 </form>
 <?php }?>
</div>
        </main>

        <div class="features-block">
              </div>
              <div class="line"></div>
            </div>
                <div class="down">
                    <picture>
                        <img src="../image/Screenshot_1.png" alt="">
                    </picture>
                    <h1>Скидки, новинки и<br>выгодные предложения!</h1>
                    </span>
                    
                    <picture>
                        <img src="https://ru-mi.com/local/templates/galaxystore_vue/frontend/build/images/footer/Brandly.svg" alt="">
                    </picture>
                    
                    <picture>
                        <img src="https://static.mir-kubikov.ru/local/templates/mir-kubikov/resources/img/new-logo.svg" alt="">
                    </picture>
                </div> 
                <div class='haeder-down'>
                    <div class="down1-title">
                        <b>+7 (495) 109-00-54 </b>
                        <div class="header-subtitle">
                            Интернет-магазин
                        </div>
                        <div class="down2-title">
                            <b>+8 800 2222-679</b>
                            <div class="header2-subtitle">
                                Сервисный-центр
                            </div>

        <script src="./JS/script.js"></script>
    </div>    

</body>
</html>