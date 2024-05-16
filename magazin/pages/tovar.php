<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Andika:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
   <style>
    .line {
     border-bottom: 1px solid 	#808080; /* Параметры линии */
    }
   </style>
    
    <title>Товар</title>
    
</head>
<body>
    <div class="Header">
            
        <div class='logohead'> 
            <a href="../index.php">
                <img src="../image/logo.png"/>
            </a>
        </div>
        
        <div class='nav'>
            
            <a class = 'nav-item' href="@"></a>АДРЕС</a>
            <a class = 'nav-item' href="@"></a>ЦЕНЫ</a>
            <a class = 'nav-item' href="@"></a>ТОВАР</a>
            <a class = 'nav-item' href="@"></a>ОТЗЫВЫ</a>
    
        </div>
        
        <div class="registracia">
            <a href="#" class="btn btn-white btn-animate">Регистрация</a>
        </div>
        <div class="vxod">
            <a href="#" class="btn btn-white btn-animate">Войти</a>
    
        </div>
    </div>
    <div class="tovar">
        <div class="name-tovar">
            <h1>Электросамокат Xiaomi Mi Electric Scooter Essential</h1>
            
        </div>
        <style>
            * {box-sizing: border-box}
            body {
            font-family: Verdana, sans-serif;
            margin:0}
            .mySlides {display: none}
            img {vertical-align: middle;}
            .slideshow-container {
            max-width: 400px;
            position: relative;
            
            }
            /* Кнопки next & previous*/
            .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            
            
            }
            /* Измените положение "next button" */
            .next {
            right: 0;
            border-radius: 3px 0 0 3px;
            }
            /* Добавьте черный фоновый цвет с небольшой прозрачностью*/
            .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
            }
            
            /* Number text (1/3 etc) */
            .numbertext {
            color: #ffffff;
            font-size: 12px;
            padding: 2px 1px;
            position: absolute;
            top: 0;
            }
            /* Точки/маркеры/указатели */
            .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #999999;
            border-radius: 25%;
            display: inline-block;
            transition: background-color 0.6s ease;
            }
            .active, .dot:hover {
            background-color: #111111;
            }
            /* Выцветание анимации */
            .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
            }
            @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            }
            @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            }
            /* Для маленьких экранов увеличьте размер текста */
            @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
            }
          </style>
        </head>
        <body>
          <div class="slideshow-container">
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="https://mi-shop.com/upload/iblock/3d4/3d49ee458ad11d397ef191e39a4f0b57.w500.webp" style="width:100%">
              
            </div>
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="https://mi-shop.com/upload/iblock/f92/f921c3212be24c1953c2b936efa5be4f.w500.webp" style="width:100%">
              
            </div>
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="https://mi-shop.com/upload/iblock/0b6/0b68def0bd40cfa6bb1395d466b40b68.w500.webp" style="width:100%">
              
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>
          <div style="margin-left:150px">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
            
          </div>
          <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
          </script>
          
            <div class="xarakter">
                
                <p>Емкость аккумулятора (мА*ч): 5100 мАч</p>
                <p>Степень защиты: IP54</p>
                <p>Материал: Алюминий</p>
                <p>Управление: Через приложение Mi Home</p>
                <p>Вес (г): 12000</p>
                <div class="xarakter-photo">
                    <picture>
                        <img src="https://static.insales-cdn.com/files/1/7974/3825446/original/rst_1_.jpg"width="40" height="40" alt="">
                    </picture>
                    <picture>
                        <img src="https://www.antech.ru/upload/resize_cache/iblock/013/960_720_0/Antech_ru_016_Wheelie_Bin.jpg"width="40" height="40" alt="">
                    </picture>
                </div>
            </div> 
            <div class="sell">
                <div class="text-sell">22 990₽</div>
                
                <div class="Buy">
                    <a href="#" class="btn btn-white btn-animate">Купить</a>
                </div>
                <div class="sell-photo">
                    <img src="https://mi-shop.com/f/i/yandex-split.svg"width="200" height="200">
                </div>
                
             </div>

             <div class="line"></div>
            </div>
                <div class="down-resister">
                    <picture>
                        <img src="..//image/Screenshot_1.png" alt="">
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
             
        </div>
        
    </div>  

    
    
    
</body>
</html>