<?php require "includes/php/config.php"; 
session_start();
$arti = mysqli_query($connection, "SELECT * FROM `acsess` WHERE `Id` = ".(int) $_GET['acsessid']);
$AA = mysqli_fetch_assoc($arti);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>купить <?php echo $AA['title']; ?> к плинтусу <?php echo $AA['vidplint']; ?> с доставкой по москве</title>
    <meta name="description" content="Купить <?php echo $AA['title']; ?> в нашем интернет-магазине с быстрой доставкой по Москве и по всей России недорого. Экологичный материал.">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/cssslider.css">
     <link rel="stylesheet" href="css/pp4.css">
    <link rel="stylesheet" href="css/sproduct.css">
</head>
<body>
	 <div class="modal-wrapper"></div>
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
                    <li><a href="States.php">Статьи</a></li>
                    <li><?php require "includes/php/cart.php"; ?></li>     
                </ul>
            </div>
        </div>
</div>
<?php
$artiS = mysqli_query($connection, "SELECT * FROM `acsess` WHERE `Id` = ".(int) $_GET['acsessid']);
$AAS = mysqli_fetch_assoc($artiS);
?>
<div class="container-fluid">
	<div class="row centered">
 			<div class="col-lg-3">
               <?php include "includes/php/menu.php";?>      
            </div>
            <br><br>
            <div class="col-lg-8 col-lg-offset-1">
            	<div class="col-lg-4">
            	 <div class="onimg"><img src="includes/images/<?php echo $AAS['image']; ?>" style="max-width: 100%;max-height: 500px;"></div>
            	</div>
            	<div class="col-lg-4">
            	 <h1><?php echo $AAS['title']; ?></h1>
            	 <br>
            	 <h1 class="onprice"><font><?php echo $AAS['price']; ?></font> Рублей/<?php if($AAS['profstyle']=="all"): echo "уп."; else: echo "шт."; endif; ?> </h1>
               <br>
               <div class="vivod"></div>
               <br>
               <div id="fuck">Сколько вам нужно штук?</div>
                <input type="number" name="onprc" size="5" style="text-align:center;" class="to"  /><br>
                
				
            	 <h2><a class="onbuying for_id_on_productto" data-id="<?php echo $AAS['Id']; ?>">В корзину</a></h2>
            
            	</div>
            	<div class="col-lg-12 afterclickbuy"><span name="closenow" style="float: right; cursor: pointer;">X</span><br> Товар добавлен в корзину!<br>
            		 <button class="btnclosenow2" name="closenow2">Продолжить покупки</button><br><a href="../../ThisCart.php">Перейти в корзину</a></div>
            </div>
            
              <div class="col-lg-8 col-lg-offset-3">
                <h2 class="zagolovok">Описание</h2>
            		<h3 class="ontext" style="text-align: justify; line-height: 1.5;"><?php echo $AAS['text']; ?></h3>
            	</div>
            </div>
        </div>
        <?php include "includes/php/parnters.php"; ?>
        <?php include "includes/php/foot.php"; ?>
        <script>
        	$(function()
	{

	const links_with_id = $('.for_id_on_productto');
	const cart_value = $("#cart_value");
	let current_id = links_with_id.attr('data-id');
	var takeinp = $("input[type='number']");
		links_with_id.bind('click', function()
		{
			
			
			$.get( "includes/php/api2.php", { acsessid: current_id} )
			.done(function(data){
				cart_value.html(data);
			});
			$.get("includes/php/hell2.php", {counts2: takeinp.val(), id3: current_id})
			.done(function(data){
			});
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

	});

        </script>
        <script src="js/bootstrap.min.js"></script>

</body>
</html>