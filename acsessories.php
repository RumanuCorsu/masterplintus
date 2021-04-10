<?php require "includes/php/config.php"; 
   session_start();
    $per_page = 15;
              $page = 1;
              if( isset($_GET['page']) )
              {
                $page = (int) $_GET['page'];
              }
              if( isset($_GET['title']) )
              {
                $srqt = (int) $_GET['title'];
              }
              $srqt = $_GET['title'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>купить аксессуары к плинтусу </title>
      <meta name="description" content="В нашем каталоге вы можете купить аксессуары к плинтусу ПВХ, МДФ по низкой цене! Большой выбор плинтуса с доставкой по Москве и Московской области ">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/cssslider.css">
    <link rel="stylesheet" href="css/pp4.css">
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
            <div class="col-lg-8">
              <?php
             
               $total_count_q = mysqli_query($connection, "SELECT COUNT(`Id`) AS `total_count`  FROM `acsess` WHERE `title` LIKE '%$srqt%'");
               $total_count = mysqli_fetch_assoc($total_count_q);
               $total_count = $total_count['total_count'];
               $total_pages = ceil($total_count / $per_page);
               if( $page <= 1 || $page > $total_pages)
               {
                $page = 1;
               }
              $offset = ($per_page * $page) - $per_page;
               $article = mysqli_query($connection, "SELECT * FROM `acsess` WHERE `title` LIKE '%$srqt%' LIMIT $offset, $per_page");
               $article_exists = true;
              if (mysqli_num_rows($article) <= 0)
              {?>
                
                <?php
                echo '<h1>Товар не найден</h1>';
                $article_exists = false;?>
                <?php
              }

                while($AA_acses = mysqli_fetch_assoc($article)){?>
                    <div class="col-lg-4">
                  <div class="telo">
                      <img src="includes/images/<?php echo $AA_acses['image']; ?>" style="margin-top:1%; width: 100%;" >
                      <h3 style="text-align: center;"><?php echo $AA_acses['title']; ?></h3><h4>Производитель: 
                        <?php echo $AA_acses['generator']; ?></h4>
                      <p class="fromprice"><h3 class="Rfromprice"><?php echo $AA_acses['price']; ?> Руб<?php if($AA_acses['profstyle']=='all'){echo "/уп.";} ?></h3></p>
                      <a href="/SproductAcsess.php?acsessid=<?php echo $AA_acses['Id']; ?>" class="bat">Подробнее</a>
                      <a class="open_wind" data-id="<?php echo $AA_acses['Id']; ?>">В корзину</a>
                  </div>
              </div><?php }?>
              <div class="how_many"><a name="closehowmany" class="closeX">X</a><br><div>Сколько вам нужно штук?</div><br><div>
              <input type="number" name="onprc" style="text-align:center;"  class="to" /></div><br>
              <button class="for_id_on_productto" data-id="<?php echo $AA_acses['Id']; ?>">Добавить</button>
            </div>
                </div>
                 <div class="container">
                    <div class="row centered">
                      <div class="col-lg-6 col-lg-offset-5">
                        <?php
                            if($article_exists == true)
                              {
                              echo ' <br> <div class="paginator">';
                              if( $page > 1 )
                              {
                                echo '<a class="pag" href="/acsessories.php?page='.($page - 1).'&title='.($srqt).'" >Прошлая страница</a>';
                              }
                              if( $page < $total_pages )
                              {
                                echo '<a class="pag" href="/acsessories.php?page='.($page + 1).'&title='.($srqt).'">Следующая страница</a>';
                              }
                              echo '</div>';
                              }
                            ?>
                      </div>
                    </div>
                  </div>
            </div>
           
        </div>
        <br>
         <?php include "includes/php/foot.php"; ?>
         <script>
             
             $(function()
        {
          var select_it = $('.open_wind');
          
          $.each(select_it, function()
          {
            $(this).bind('click', function(){
                
                window['get_id'] = $(this).attr('data-id');
                let peredacha = $('.for_id_on_productto');
                peredacha.attr('data-id', get_id);
                let openthis = $('.how_many');
                let backgroundopen = $('.modal-wrapper');
                    openthis.css('display', 'block');
                    backgroundopen.css('display', 'flex');
           });
        });
    });


            $(function()
    {

    const links_with_id = $('.for_id_on_productto');
    const cart_value = $("#cart_value");
    
    var takeinp = $("input[type='number']");
        $.each(links_with_id, function(){
        $(this).bind('click', function()
        {
            let current_id = $(this).attr('data-id');
            $.get( "includes/php/api2.php", { acsessid: current_id} )
            .done(function(data){

                cart_value.html(data);
            });
            
            
            $.get("includes/php/hell2.php", {counts2: takeinp.val(), id3: current_id})
            .done(function(data){
            });
            
        });
        });

    });
            var closehow = $("a[name='closehowmany']");
    closehow.bind('click', function(){
        $(".how_many").css('display', 'none');
        $(".modal-wrapper").css('display', 'none');
    });
    var afterchange = $(".for_id_on_productto");
    afterchange.bind('click', function(){

         $(".how_many").css('display', 'none');
        $(".modal-wrapper").css('display', 'none');
    });

         </script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>