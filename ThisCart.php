<?php 
session_start();
require "includes/php/config.php";
require "includes/php/functions.php"; 


?>
<!DOCTYPE html>
<html lang="ru">
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина покупок</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/cssslider.css">
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
                   <li><a href="index.php">Главная</a></li>
                   <li><a href="AboutUs.php">О нас</a></li>
                   <li><a href="Calling.php">Связаться</a></li>
                   <li><a href="Products.php">Товары</a></li>
                   <li><a href="Dostavka.php">Доставка</a></li>
                   <li><a href="States.php">Статьи</a></li>
                   <li><?php require "includes/php/cart.php"; ?></li>     
               </ul>
           </div>
       </div>
   </div>
    <div class="modal-wrapper"></div> 
<div class="container-fluid ont">
  <div class="row">
    <div class="col-lg-12 cartin">
	<h1 style="text-align: center; margin-top: 5%;">Корзина</h1>
  <hr>
	<?php
  if((isset($_SESSION['cart_list']) || isset($_SESSION['cart_list2'])) && (count($_SESSION['cart_list']) != 0 || count($_SESSION['cart_list2'])!=0) ) :
	if(isset($_SESSION['cart_list']) && count($_SESSION['cart_list']) != 0) :?>
  <div class="col-lg-12">
    <h3 style="text-align: center;">Товары:</h3>
     </div><br>
	<ul id="spis">
		<?php 
     foreach( $_SESSION['cart_list'] as $art) :
       ?>
		<li class="opa">
      <div class="col-lg-5"><?php if($art['generator']=='Decomaster'){?><img src="https://decomaster.su/<?php echo $art['image']; ?>" style="max-width: 100%";><?php } else{?><img src="includes/images/<?php echo $art['image']; ?>"><?php }?> </div>
			<div class="titl"><?php echo $art['title']; ?></div> 
       <div data-id="<?php echo $art['Id']?>"><?php  $hoa = $_SESSION['cart'][$art['Id']]['qty']; echo $hoa;?> шт.,
        на сумму <?php $sum= $art['price']*$_SESSION['cart'][$art['Id']]['qty']; echo $sum;?> руб.  </div>
      <div class="col-lg-12 ver"> <?php echo $art['price']; ?> руб./шт. |
      <button name="changbtn" data-id="<?php echo $art['Id']?>">Изменить количество</button>
      <button name="deletetovar1" data-id="<?php echo $art['Id']; ?>"><span>X</span> Удалить товар</button>
      <?php $countsum += $sum;?></div>

		</li>
	<?php  endforeach;?>
	
  
 
    <?php else : ?>

      <p style="text-align: center; font-size: 40px; margin-top:50px; margin-bottom:100px;">
    У вас нет товаров
    </p>
  <?php endif; ?>
    
      <div class="col-lg-12">
    <h3 style="text-align: center;">Аксессуары:</h3>
     </div><br>

	<?php if(isset($_SESSION['cart_list2']) && count($_SESSION['cart_list2']) != 0) :?>
  <ul>
    <?php 
     foreach( $_SESSION['cart_list2'] as $arta) :
       ?>

    <li class="opa">
      <div class="col-lg-6"><img src="includes/images/<?php echo $arta['image']; ?>"></div>
      <div class="titl"><?php echo $arta['title']; ?></div> 
       <div data-id="<?php echo $arta['Id']?>"><?php  $hoa = $_SESSION['cart2'][$arta['Id']]['qty']; echo $hoa; if($arta['profstyle']=="all"): echo "уп."; else: echo "шт."; endif;?>,
        на сумму <?php $sum= $arta['price']*$_SESSION['cart2'][$arta['Id']]['qty']; echo $sum;?> руб.   
        <br><?php if($arta['profstyle']!=='all'){ ?> Профиль/цвет:<?php echo $arta['profstyle']; }?><br>
         </div>
      <div class="col-lg-12 ver"> <?php echo $arta['price']; ?> руб./<?php if($arta['profstyle']=="all"): echo "уп."; else: echo "шт."; endif;?>   
      <button name="changbtn2" data-id="<?php echo $arta['Id']?>">Изменить количество</button>
      <button name="deletetovar" data-id="<?php echo $arta['Id']; ?>"><span>X</span> Удалить товар</button>
      <?php $countsum += $sum;?></div>
    </li>
  <?php  endforeach;?>
  </ul>
      
      <?php else : ?>

		<p style="text-align: center; font-size: 40px; margin-top:50px; margin-bottom:100px;">
		У вас нет аксессуаров
		</p>

	<?php endif; ?>
       <div class="itogi">
  <div style="text-align: center; padding:2%; font-size: 150%; color: black;"> Итого: <?php echo $countsum; ?> рублей. <?php if($countsum<6000): ?>
  <br> <div style="color: rgb(240, 69, 0);">Сумма заказа должна быть не менее 6000 рублей, для оформления вам не хватает :<?php $howmuchsum = 6000-$countsum; echo $howmuchsum; ?></div>
  <?php endif; ?></div>
    <?php if($countsum>6000): ?><a href="Order.php" id="selectedzakaz"  >Оформить заказ</a><?php endif; ?>
    </div>
  <?php else : ?>  <p style="text-align: center; font-size: 40px; margin-top:50px; margin-bottom:100px;">
               Ваша корзина пуста.
                  </p>
  <?php
   endif; ?>
    <div  id="changesmenu"><a name="closehowmany" class="closeX">X</a><br><div style="font-weight: 500; text-align:center;">Сколько вам нужно штук?</div>
    <br> <input type="number" class="inputchange"  value="0" /><br><button data-id="<?php echo $art['Id']?>" class="changebtn">Изменить</button></div>
  
    <div  id="changesmenuS"><a name="closehowmany" class="closeX2">X</a><br><div style="font-weight: 500; text-align:center;">Сколько вам нужно штук?</div>
    <br> <input type="number" class="inputchange2"  value="0" /><br><button data-id="<?php echo $arta['Id']?>" class="changebtn2">Изменить</button></div>
  </div>
</div>  
</div> <br><br><br><br><br><br><br>
  <?php
  require "includes/php/parnters.php";?>

  <?php
  require "includes/php/foot.php";
  ?>

	 <script src="js/bootstrap.min.js"></script>
  <script>
    $(function(){

      var takespisok = $(".opa");
      a=1;
      $.each(takespisok, function(){

        $(this).attr('id', a);
        a += 1;
        var takeit =  $(this).attr('id');
      });

    });
    $(function(){

    


    var takebtnview = $("button[name='changbtn']");
    var takemenuchange = $("#changesmenu");
    var takedatidonnext = 0;
    var selectchangebtn = $(".changebtn");
    var selectinputchange2 = $(".inputchange");
    $.each(takebtnview, function(){

      $(this).bind('click', function(){

        let backgroundopen = $('.modal-wrapper');
        backgroundopen.css('display', 'flex');
        takemenuchange.css('display', 'block');
        takedatidonnext = $(this).attr('data-id');
      });
    });
    var closechangemenu = $(".closeX");
    closechangemenu.bind('click', function(){

        takemenuchange.css('display', 'none');
    });  
   selectchangebtn.bind('click',function(){
    var takehowmuch = selectinputchange2.val();
    $.get("includes/php/changehow.php", {id: takedatidonnext, count: takehowmuch})
    .done(function(data){
      location.reload();
        });
      });
    });

$(function(){
    var takebtnview2 = $("button[name='changbtn2']");
    var takemenuchange2 = $("#changesmenuS");
    var takedatidonnext2 = 0;
    var selectchangebtn2 = $(".changebtn2");
    var selectinputchange3 = $(".inputchange2");
    $.each(takebtnview2, function(){
      $(this).bind('click', function(){
        let backgroundopen2 = $('.modal-wrapper');
        backgroundopen2.css('display', 'flex');
        takemenuchange2.css('display', 'block');
        takedatidonnext2 = $(this).attr('data-id');
      });
    });
    var closechangemenu2 = $(".closeX2");
    closechangemenu2.bind('click', function(){
        takemenuchange2.css('display', 'none');
    });  
   selectchangebtn2.bind('click',function(){
    var takehowmuch2 = selectinputchange3.val();
    $.get("includes/php/changehow2.php", {id: takedatidonnext2, count: takehowmuch2})
    .done(function(data){
      location.reload();
    });
   });
 });
  
  $(function(){
  var deletbtn = $("button[name='deletetovar']");
  
  $.each(deletbtn, function(){

    $(this).bind('click', function(){
      var takeatrdelet = $(this).attr('data-id');
      $.get("includes/php/deletecart.php", {id: takeatrdelet})
      .done(function(data){
        location.reload();
    });

  });
  });
});

  $(function(){
  var deletbtn1 = $("button[name='deletetovar1']");
  
  $.each(deletbtn1, function(){

    $(this).bind('click', function(){
      var takeatrdelet1 = $(this).attr('data-id');
      $.get("includes/php/deletecart2.php", {id2: takeatrdelet1})
      .done(function(data){
        location.reload();
    });
  });
  });
});

   var selectedzakaz = $("#selectedzakaz");

   selectedzakaz.bind('click', function(){
    var take = $("#spis").text();
    $.post("includes/php/order.php", {zakaz: take})
    .done(function(data){
    });

   });

  </script>
  
</body>
</html>