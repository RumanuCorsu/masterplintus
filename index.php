<?php require "includes/php/config.php"; 
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['title']; ?></title>
    <meta name="description" content="Лучший интернет магазин по продаже плинтуса master-plintus.ru. Плинтусы деревянные. Шпонированные плинтусы. Лепнину из полиуретана. Плинтусы под покраску. Низкие цены, большой выбор, быстрая доставка!">
    <meta name="keywords" content="напольные плинтусы, белые плинтусы, плинтусы деревянные, потолочные плинтусы, шпонированные плинтусы, лепнина из полиуретана, плинтусы под покраску.">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/cssslider.css">

</head>
<body >         
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
                   <li class="active"><a href="#">Главная</a></li>
                   <li><a href="AboutUs.php">О нас</a></li>
                   <li><a href="Calling.php">Контакты</a></li>
                   <li><a href="Products.php">Товары</a></li>
                   <li><a href="Dostavka.php">Доставка</a></li>
                   <li><a href="States.php">Статьи</a></li>
                   <li><?php require "includes/php/cart.php"; ?></li>     
               </ul>
           </div>
       </div>
   </div>

  <?php include "includes/php/maintitle.php"; ?>
  <?php include "includes/php/slider.php"; ?>
  <?php include "includes/php/UTP.php";?>
  <br><br>
  <?php include "includes/php/parnters.php"; ?>
  <?php include "includes/php/foot.php"; ?>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>