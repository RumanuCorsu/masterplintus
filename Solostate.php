<?php require "includes/php/config.php";
session_start();
 $stateshead = mysqli_query($connection, "SELECT * FROM `states` WHERE `Id` = ".(int) $_GET['id']);
 $takestateshead = mysqli_fetch_assoc($stateshead);
 ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $takestateshead['title']; ?></title>
    <meta name="description" content="<?php echo $takestateshead['title']; ?> ">
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

<?php $solotate = mysqli_query($connection, "SELECT * FROM `states` WHERE `Id` = ".(int) $_GET['id'] );
	$takesolostate = mysqli_fetch_assoc($solotate); ?>
	<div class="container mashtabstate">
	<div class="row solostatestyle">
	<a href="States.php" >Вернуться назад</a>
	<h1> <?php echo $takesolostate['title']; ?></h1>
	<img src="img/states/<?php echo $takesolostate['image']; ?>">
	<div class="col-lg-12" ><?php echo $takesolostate['text']; ?></div>
	</div>
	</div>
	<br>
	<?php include "includes/php/foot.php"; ?>
	 <script src="js/bootstrap.min.js"></script>
</body>
</html>