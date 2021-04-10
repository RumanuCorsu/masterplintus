<?php require "includes/php/config.php"; 
session_start();?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/cssslider.css">
    <link rel="stylesheet" href="css/AboutUs.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="index.php"><img src="img/лого.png" style="max-width: 60%;"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="index.php">Главная</a></li>
                    <li class="active"><a href="AboutUs.php">О нас</a></li>
                    <li><a href="Calling.php">Контакты</a></li>
                    <li><a href="Products.php">Товары</a></li>
                    <li><a href="Dostavka.php">Доставка</a></li>
                    <li><a href="States.php">Статьи</a></li>
                    <li><?php require "includes/php/cart.php"; ?></li>     
                </ul>
            </div>
        </div>
    </div>
  
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <br>
                <br>
                <br>
                <br>
                <h1 id="head">О нас</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <br>
           <div class="col-lg-12">
               <h2 style="color:black;">Кто мы?</h2>
               <hr>
                <div class="col-lg-12" style="font-size: 25px;">
                    Наша компания Master-plintus.ru занимается продажей преимущественно напольного плинтуса, но также мы предлагаем потолочные карнизы и молдинги.<br>

                    Уверены, вы останетесь довольны сотрудничеством с нами, потому что у нас:<br>
                    <br>
                    - все виды самых популярных плинтусов в одном месте<br>
                    - цены одни из самых низких, можете убедиться на яндекс маркете<br>
                    - сроки доставки самые быстрые<br>
                    - стоимость доставки низкая<br>
                    - оперативная отправка в любой город<br>
                    - всё, что на сайте, есть в наличии!<br>
                    - приветливый и вежливый персонал<br>
                    - снабжаем объекты любой площади и любой сложности<br>
                    <br>
                    Наша компания молодая, но достаточно опытная с сфере продаж именно плинтуса.<br>

                    Мы предлагаем не всё, что имеется на рынке стройматериалов в категории "напольный плинтус", а только самые ходовые, актуальные и качественные продукты.<br>

                    Поскольку мы давно трудимся в этой сфере, мы наработали хорошие и крепкие связи с ведущими производителями плинтуса, как в России, так и за её пределами. Поэтому смело можем назвать себя надёжным партнёром.<br>

                    На нашем сайте вы найдёте плинтус из различных материалов:<br>
                    <br>
                    - МДФ (мелко-дисперсная фракция)<br>
                    - ПВХ (поливинилхлорид)<br>
                    - дюрополимер (экологически безопасный материал, изготовленный из пенополистирола)<br>
                    - алюминий<br>
                    <br>
                    Есть как цветной плинтус, так и белый, который можно использовать под покраску, а можно и не красить. Также множество фактур, дизайнов и различные варианты по высоте.<br>

                    Мы не пытаемся "продать любой ценой" и как можно больше. Для нас, конечно, важно зарабатывать, но не менее важно сохранять за собой чистую репутацию.<br>

                    Поэтому мы стараемся угодить каждому клиенту, чтобы он остался доволен и процессом взаимодействия с нами, и конечным результатом.<br>

                    У нас самые быстрые сроки выполнения заказа, клиент чаще всего получает товар в день заказа, либо на следующий день. Для удалённых клиентов сроки получения заказа зависят от их местонахождения.
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row"> 
            <?php include "includes/php/calling.php"; ?>
        </div>
        </div>
    <br>
   <?php  include "includes/php/foot.php"?>
    <script  src="js/bootstrap.min.js"></script>
</body>
</html>