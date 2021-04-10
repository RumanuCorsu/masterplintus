<?php 
session_start();
require "includes/php/config.php";
require "includes/php/functions.php"; 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	 <meta charset="UTF-8">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оформление заказа</title>
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
                   <li><a href="#">Главная</a></li>
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
  <div class="container">
    <div class="row">
      <div class="col-lg-12" id="formazakaza">
        <h2 style="text-align: center; color:black;">Оформление заказа</h2>
        <hr>
         <div class="col-lg-12 polafill">Все поля обязательны для заполнения!</div><br>
          <form class="onform" method="post" id="formzakaz">
            <div class="col-lg-12">
          <input type="text" id ="familia" name="familia" placeholder="Введите фамилию" class="oninput" onkeyup="checkParams()" required />
          <input type="text" id ="imya" name="imya" placeholder="Введите имя" onkeyup="checkParams()" style="margin-bottom: 20px;" required />
            </div>
             <div class="col-lg-12">
          <input type="text" id="email" name="email" placeholder="Введите вашу почту" onkeyup="checkParams()" class="oninput" required />
          <input type="text" id="number" name="number" placeholder="Введите ваш телефон" onkeyup="checkParams()" style="margin-bottom: 20px;" required />
            </div>
            <div class="col-lg-12">
          <input type="text" id="place" name="place" placeholder="Введите ваш адрес" onkeyup="checkParams()" class="oninput" required />
          <input type="text" id="city" name="city" placeholder="Введите ваш город" onkeyup="checkParams()" style="margin-bottom: 10px; " required />
            </div>
          <?php require "includes/php/selectobl.php"; ?>
          <div>
            <div class="col-lg-5" class="dostavwork">
            Выберите способ доставки:<br>
           <input type="radio" name="dostav" value="Самовывоз"> Самовывоз <br>
           <input type="radio" name="dostav" value="Доставка"> Доставка <br>
            </div>
           <div class="col-lg-5 " >
             Укажите способ оплаты:<br>
            <input type="radio" name="pay" value="Наличными"> Наличными <br>
           <input type="radio" name="pay" value="Банковской картой"> Банковской картой <br>
            </div>
            <div class="col-lg-12 aboutcomment">
            Так же вы можете оставить комметарий к доставке:<br><br>
            <input type="textarea" name="comment" class="oncomment"> <br>
            </div>
            </div>

          <input type="button" value="Заказать" id="btnfrm" disabled style="width: 150px; height: 50px;">
        </form>
      </div>
       <div class="col-lg-12" id="afterzakaz"> <h1>Спасибо за заказ!</h1> <br> <h2>В течении часа с вами свяжется наш оператор для закрепления заказа!</h2><br>
        <a href="index.php" style="text-decoration: none; color: white; font-size: 150%; background-color: #999;
        padding: 1%; font-family: 'Lato',sans-serif; ">Вы можете перейти на главную страницу!</a></div>
    </div>
  </div>
  <?php require "includes/php/foot.php"; ?>
  <script>
    
    var takebtnzakaz = $("#btnfrm");
    takebtnzakaz.bind('click', function(){
      var takeform = $("#formzakaz").serialize();
    $.ajax({

      dataType: 'html',
      type: "POST",
      url: "includes/php/send.php",
      data: takeform,
      success: function(data){
        
        var takeformazakazahide = $("#formazakaza");
        takeformazakazahide.css('display', 'none');
        var takeafterzakaz = $("#afterzakaz");
        takeafterzakaz.css('display', 'block');
      }

    });
  });
    function checkParams() {
    var familia = $('#familia').val();
    var imya = $('#imya').val();
    var email = $('#email').val();
    var number = $('#number').val();
    var place = $('#place').val();
    var city = $('#city').val();
    
    if(familia.length != 0 && imya.length != 0 && email.length != 0 && number.length != 0 && place.length != 0 && city.length != 0) {
        $('#btnfrm').removeAttr('disabled');
    } else {
        $('#btnfrm').attr('disabled', 'disabled');
    }
}
  </script>
 

</body>
</html>