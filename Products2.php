<?php require "includes/php/config.php";
session_start(); ?>
<?php
$artis = mysqli_query($connection, "SELECT * FROM `articles` WHERE `Id` = ".(int) $_GET['id_articles']);
$AAT = mysqli_fetch_assoc($artis);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> купить <?php echo $AAT['title']; ?> с доставкой по Москве</title>
    <meta name="description" content="Купить <?php echo $AAT['title']; ?> в нашем интернет-магазине с быстрой доставкой по Москве и по всей России недорого.">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/cssslider.css">
    
    <link rel="stylesheet" href="css/pp4.css">
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
                    <li><a href="Calling.php">Контакты</a></li>
                    <li class="active"><a href="Products.php">Товары</a></li>
                    <li><a href="Dostavka.php">Доставка</a></li>
                    <li><a href="States.php">Статьи</a></li>
                    <li><?php require "includes/php/cart.php"; ?></li>     
                </ul>
            </div>
        </div>
</div>
<?php include "includes/php/tovar.php";?>
<br>
<br>
<?php include "includes/php/foot.php"; ?>
<script src="js/bootstrap.min.js"></script>
<script>
    var lunks_with_id = $(".for_id_on_product");
     lunks_with_id.bind('click', function()
    {
  $(".afterclickbuy").css('display', 'block');
      $(".modal-wrapper").css('display', 'block');
      var closenow = $("span[name='closenow']");
      closenow.bind('click',function(){
        $(".afterclickbuy").css('display', 'none');
        $(".modal-wrapper").css('display', 'none');
        
      });
      var closenow2 = $("button[name='closenow2']");
        closenow2.bind('click',function(){
        $(".afterclickbuy").css('display', 'none');
        $(".modal-wrapper").css('display', 'none');
      });
      });
     
       var lunks_with_idorac = $(".for_id_on_productorac");
     lunks_with_idorac.bind('click', function()
    {
  $(".afterclickbuy").css('display', 'block');
      $(".modal-wrapper").css('display', 'block');
      var closenoworac = $("span[name='closenow']");
      closenoworac.bind('click',function(){
        $(".afterclickbuy").css('display', 'none');
        $(".modal-wrapper").css('display', 'none');
        
      });
      var closenow2orac = $("button[name='closenow2']");
        closenow2orac.bind('click',function(){
        $(".afterclickbuy").css('display', 'none');
        $(".modal-wrapper").css('display', 'none');
      });
      });
</script>
</body>
</html>