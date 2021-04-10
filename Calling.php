<?php require "includes/php/config.php"; 
session_start();?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Связаться с нами</title>
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
                    <li><a href="AboutUs.php">О нас</a></li>
                    <li class="active"><a href="Calling.php">Контакты</a></li>
                    <li><a href="Products.php">Товары</a></li>
                    <li><a href="Dostavka.php">Доставка</a></li>
                    <li><a href="States.php">Статьи</a></li>
                    <li><?php require "includes/php/cart.php"; ?></li>   
                </ul>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
     <div class="container">
        <div class="row">
            <br>
            <?php include "includes/php/calling.php"; ?>
        </div>
     </div>
        <br>
         <?php include "includes/php/parnters.php"; ?>
    <div class = "foot"><?php  include "includes/php/foot.php"; ?></div> 
    <script  src="js/bootstrap.min.js"></script>
</body>
</html>