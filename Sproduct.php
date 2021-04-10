<?php require "includes/php/config.php"; 
session_start();?>
<?php
$arti = mysqli_query($connection, "SELECT * FROM `product` WHERE `Id` = ".(int) $_GET['id']);
$AA = mysqli_fetch_assoc($arti);
?>
<!DOCTYPE html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>купить <?php echo $AA['title']; ?> с доставкой по москве</title>
    <meta name="description" content="Купить <?php echo $AA['title']; ?> в нашем интернет-магазине с быстрой доставкой по Москве и по всей России недорого. Экологичный материал, в японской финишной пленке, фактура под дерево.">
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

<div class="container-fluid">
	<div class="row centered">
 			<div class="col-lg-3">
               <?php include "includes/php/menu.php";?>      
            </div>
            <br><br>
            <div class="col-lg-8 col-lg-offset-1">
            	<div class="col-lg-4">
            	 <div class="onimg"><?php if($AA['generator']=="Decomaster") { ?> <img src="https://decomaster.su/<?php echo $AA['image']; ?>" style="max-width: 100%";> <?php } else {?>
                <img src="includes/images/<?php echo $AA['image']; ?>" style="max-width: 100%;"> <?php } ?> </div>
            	</div>
            	<div class="col-lg-4">
            	 <h1><?php  echo $AA['title']; ?></h1>
            	 <br>
            	 <h1 class="onprice"><font><?php echo $AA['price']; ?></font> Рублей/шт. </h1>
               <br>
               <?php if($AA['generator']!=="OracDecor") {echo '<div class="vivod"></div>';} ?>
               <br>
               <div id="fuck"><?php if($AA['generator']=="OracDecor"){ echo "Сколько вам нужно штук?";} else {echo "Сколько вам нужно метров?";}?></div>
                <input type="number" name="onprc" size="5" style="text-align:center;"   onkeyup="func5()" class="to"  />
            	 <h2><a class="onbuying for_id_on_product" data-id="<?php echo $AA['Id']; ?>">В корзину</a></h2>
               <div class="col-lg-12 afterclickbuy"><span name="closenow" style="float: right; cursor: pointer;">X</span><br> Товар добавлен в корзину!<br>
                <button class="btnclosenow2" name="closenow2"><a href="#doptovar" data-target="dopTOVAR" style="color:white;">Продолжить покупки</a></button><br><a href="../../ThisCart.php">Перейти в корзину</a></div>
            	</div>
            </div>
            <div class="col-lg-8 col-lg-offset-3">
                <h2 class="zagolovok">Описание</h2>
                <?php if($AA['generator']=="OracDecor"){ ?>
                 <h3 class="ontext" style="text-align: justify; line-height: 1.5;"><?php echo "Высота : ";  echo $AA['height']; echo " См. <br> Длина : ";  echo $AA['size']; echo " См. <br> Производитель : ".$AA['generator'].""; ?></h3>
                <?php }  else {?>
                   <h3 class="ontext" style="text-align: justify; line-height: 1.5;"><?php echo $AA['text']; ?></h3>
                   <h2 class="zagolovok"> Характеристики: </h2>
                   <h3 class="ontext" style="text-align: justify; line-height: 1.5;"><?php echo "Длинна: ".$AA['size']."м.<br> Высота: ".$AA['height']."мм<br> Производитель: ".$AA['generator']."<br> Тип плинтуса: ".$AA['vidplint']; ?></h3>
            	     <?php }?>
                    <div id="doptovar">
                      <div class="acsestext">Не забудьте сопутствующие товары!</div>
                    <?php
                    $acseso = $AA['profcolor'];
                    $generator = $AA['generator'];
                     if($AA['vidplint']=='мдф' || $AA['vidplint']=='пвх'){$arti_acses = mysqli_query($connection,"SELECT * FROM `acsess` WHERE `profstyle` = '$acseso' OR `profstyle` = 'all'  ");}
                     else{$arti_acses = mysqli_query($connection,"SELECT * FROM `acsess` WHERE `generator` = '$generator' ");}
                   while($AA_acses = mysqli_fetch_assoc($arti_acses))
                   {
                    ?>
               <div class="col-lg-4">
                  <div class="telo">
                      <img src="includes/images/<?php echo $AA_acses['image']; ?>" style="margin-top:1%; width: 50%; max-height:250px;" >
                      <h3 style="text-align: center;"><?php  echo mb_substr($AA_acses['title'], 0, 41, 'utf-8'); ?></h3><h4>Производитель: 
                        <?php echo $AA_acses['generator']; ?></h4>
                      <p class="fromprice"><h3 class="Rfromprice"><?php echo $AA_acses['price']; ?> Руб</h3></p>
                      <a href="/SproductAcsess.php?acsessid=<?php echo $AA_acses['Id']; ?>" class="bat">Подробнее</a>
                      <a class="open_wind" data-id="<?php echo $AA_acses['Id']; ?>">В корзину</a>
                  </div>
              </div>
             
               <div class="how_many"><a name="closehowmany" class="closeX">X</a><br><div>Сколько вам нужно штук?</div><br><div>
              <input type="number" name="onprc2" style="text-align:center;"  class="to" /></div><br>
              <button class="for_id_on_productto" data-id="<?php echo $AA_acses['Id']; ?>">Добавить</button>
            </div>
              <?php } ?>
            </div>
              
              </div>
          
	</div>
</div>

<br>
<br>
<?php include "includes/php/foot.php"; ?>
<script>
    get_id = <?php $getid = $_GET['id']; echo $getid; ?>

                 $.get( "/includes/php/takemeters.php", { id: get_id } )
                .done(function( data )
                {
                    window['size'] = data;
                });
                $.get( "/includes/php/takemeters2.php", { id: get_id } )
                .done(function( data )
                {
                    window['price'] = data;
                });
    function func5()
  {
    var step = document.querySelector('input.to').value;
    var modstep = parseInt(step);
    let test = $("input[name='onprc']").attr('value');
    let test2 = parseInt(test);
    let vivod = Math.ceil(modstep/size);
    let elem = document.querySelector('div.vivod');
    let summing = price * vivod;
    elem.textContent = "Вам нужно приобрести " + vivod + "шт." + "на сумму " + summing + " руб."; 
    var enter = modstep;  
  }
  const links_with_id = $('.for_id_on_product');
  
   
    
    $(function()
  {
     const links_with_id2 = $('.for_id_on_productto');
    const cart_value = $("#cart_value");
    var openwidows = $(".open_wind");
    openwidows.bind('click', function(){
      var peredacha2 = openwidows.attr('data-id');
      links_with_id2.attr('data-id', peredacha2);
      
    });
    var current_id2 = links_with_id2.attr('data-id');
    links_with_id2.bind('click', function()
    {
      var takeinp = $("input[name='onprc2']");
      $.get("includes/php/hell2.php", {counts2: takeinp.val(), id3: current_id2})
      .done(function(data){
      });
      $.get( "includes/php/api2.php", { acsessid: current_id2} )
      .done(function(data){
        cart_value.html(data);
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
        $(".how_many").css('display', 'none');
    });

  });
</script>
<?php if($AA['generator']=="OracDecor"){?>
  <script>
     links_with_id.bind('click', function()
    {
      var step2 = document.querySelector('input.to').value;
      let current_id = $(this).attr('data-id');
      $.get( "includes/php/api.php", { id: current_id} )
      .done(function(data){

        cart_value.html(data);
      
      });

      let current_id2 = $(this).attr('data-id');
      $.get("includes/php/hell.php", {counts: step2, id2: current_id2})
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

  </script>
<?php } else {?>
    <script>
     links_with_id.bind('click', function()
    {
  $(".afterclickbuy").css('display', 'block');
      $(".modal-wrapper").css('display', 'block');
      var closenow = $("span[name='closenow']");
      closenow.bind('click',function(){
        $(".afterclickbuy").css('display', 'none');
        $(".modal-wrapper").css('display', 'none');
        
      });
      });


    $('a[data-target="dopTOVAR"]').bind('click.smoothscroll', function(){

      var target = $(this).attr('href'),
          target_top = $(target).offset().top;
      $('body, html').animate({scrollTop: target_top}, 700);
       $(".afterclickbuy").css('display', 'none');
        $(".modal-wrapper").css('display', 'none');
      return false;
    });


  </script>
<?php } ?>

   <script src="js/bootstrap.min.js"></script>
</body>
</html>