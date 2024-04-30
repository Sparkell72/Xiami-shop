<!DOCTYPE html>
<?php
    session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
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
                <a href="./pages/korzuna.php" class="btn btn-white btn-animate">Корзина</a>
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
                
                </div>
                <div class="photo1">
                    <img src="./image/sell.png"/>
                </div>
            
                <div class="Centr">
                <div class="cent-title">
                    <h1>Интернет-магазин оригинальной техники Xiaomi</h1>
                </div>
                
                <div class="sub-title">
                    <h1>Специально для вас</h1>
                </div>
                
            </div>    
        </div>
        
            <div class="wrapper">
               
                <?php
                    require_once ('./vendor/connect.php');
                  $qeri = "SELECT * FROM `product`";
                    $result = mysqli_query($connect, $qeri);
                    
                    while($row = mysqli_fetch_assoc($result)):?>
                            <div class="card">
                        <img width="320" height="340" src=".//image/<?php echo $row ['imgfale']?>" alt="Xiaomi Mi Electric Scooter Essential">
                        <div class="content">
                            <div class="row">
                                <div class="details">
                                    <span>
                                        <?php echo
                                    $row["name"]
                                        ?> </span>
                                            
                                    <p><?php echo $row['manefacter'] ?></p>
                                </div>
                                <div class="price"><?php echo $row['price'] ?> руб</div>
                            </div>
                            <div class="buttons">
                                <button> <a href="./pages/tovar.php?id=<?php echo $row['id'] ?>">Купить в 1 клик</a></button>
                                <button class="cart-btn"><a href="./vendor/basket.php?id=<?php echo $row['id'] ?>">В корзину</a></button> 
                            </div>
                        </div>
                    </div>
<?php endwhile; ?>       
                         <!-- <div  class="cart-nav">
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Корзина</span>
                    </div>
                    <div class="item-count">0</div>
                </div> -->

                <!-- <div class="card">
                    <img src="https://mi-shop.com/upload/iblock/278/27854e7779fb15d3a9164d9657d5a326.webp" alt="Xiaomi Mi Electric Scooter Essential">
                    <div class="content">
                        <div class="row">
                            <div class="details">
                                <span>Xiaomi Mi Essential</span>
                                <p>Самокат премиум-класса</p>
                            </div>
                            <div class="price">22 990 ₽</div>
                        </div>
                        <div class="buttons">
                            <button> <a href="./pages/tovar.php">Купить в 1 клик</a></button>
                            <button class="cart-btn">В корзину</button>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="card">
                    <img src="https://mi-shop.com/upload/iblock/030/030b51ea277edab4e1fa8c5dcbf733bc.webp" alt="Xiaomi MiJia Electric Scooter">
                    <div class="content">
                        <div class="row">
                            <div class="details">
                                <span>Xiaomi MiJia Electric</span>
                                <p>Самокат премиум-класса</p>
                            </div>
                            <div class="price">18 990 ₽</div>
                        </div>
                        <div class="buttons">
                            <button>Купить в 1 клик</button>
                            <button class="cart-btn">В корзину</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="https://mi-shop.com/upload/iblock/d0f/d0f5c14745251e08479b56ff4a2a5a9b.webp" alt="Xiaomi Electric Scooter 3 Lite">
                    <div class="content">
                        <div class="row">
                            <div class="details">
                                <span>Xiaomi Electric 3 Lite</span>
                                <p>Самокат премиум-класса</p>
                            </div>
                            <div class="price">35 990 ₽</div>
                        </div>
                        <div class="buttons">
                            <button>Купить в 1 клик</button>
                            <button class="cart-btn">В корзину</button>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="features-block">
                <div class="image">
                  <span>
                      <picture>
                          <img src="https://static.ru-mi.com/upload/iblock/013/emcdajg48opqhyz2ex36u3h7rn24jzgi.png" alt="">
                      </picture>
                      <h1>860 Пунктов самовывоза</h1>
                      </span>
                  <span>
                      <picture>
                          <img src="https://static.ru-mi.com/upload/iblock/08f/6358bbeaf371c6zb86nhmyw23lt5wyk8.png" alt="">
                      </picture>
                      <h1>Бесплатная доставка</h1>
                      </span>
                  <span>
                      <picture>
                          <img src="https://static.ru-mi.com/upload/iblock/541/w36ub3j0g9jbqfgr2149ejtomh4ue1b4.png" alt="">
                      </picture>
                      <h1>Официальные поставщики</h1>
                      </span>
                      
                </div>
              </div>
              <div class="line"></div>
            </div>
                <div class="down">
                    <picture>
                        <img src="./image/Screenshot_1.png" alt="">
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