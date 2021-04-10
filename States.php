<?php require "includes/php/config.php";
session_start(); 

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Полезные статьи о плинтусе</title>
    <meta name="description" content="В разделе статьи вы можете найти ответы на различные вопросы касающиеся плинтуса">
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
                    <li><a href="Products.php">Товары</a></li>
                    <li><a href="Dostavka.php">Доставка</a></li>
                    <li  class="active"><a href="States.php">Статьи</a></li>
                    <li><?php require "includes/php/cart.php"; ?></li>     
                </ul>
            </div>
        </div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-12 statesclass"> <h1 style="color: white;"> Статьи </h1>
<?php $statesquery = mysqli_query($connection, "SELECT * FROM `states`");
 while($onlystate = mysqli_fetch_assoc($statesquery))
    {?>
        <div class="col-lg-6 centered"> 
            <?php echo "<h3 style='color: white; font-family:Lato, sans-serif;'>".$onlystate['title']. "</h3>"; ?>
            <img src="img\states\<?php echo $onlystate['image']; ?>" style="max-width: 100%; max-height: 200px;"><br>
            <?php echo "<div style='text-align: justify;'>" .mb_substr($onlystate['text'], 0, 200, 'utf-8')."... </div>"; ?>
            <br>
            <a href="Solostate.php?id=<?php echo $onlystate['Id']; ?>" class="changebtnprof">Подробнее</a>
        </div>
    <?php } ?>

</div>
</div>  
</div>
<br>
<?php include "includes/php/foot.php";?>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>