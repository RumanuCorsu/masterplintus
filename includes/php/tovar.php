 <?php require "config.php";?>
<div class="container-fluid">
    <div class="row centered">   
      <div class="modal-wrapper"></div> 
            <div class="col-lg-3 ">
               <?php include "includes/php/menu.php";?>     
                 
            </div>

            <div class="col-lg-8">
            
              <?php
              $per_page = 9;
              $page = 1;
              if( isset($_GET['page']) )
              {
                $page = (int) $_GET['page'];
              }
              if( isset($_GET['id_articles']) )
              {
                $srt = (int) $_GET['id_articles'];
              }
               if( isset($_GET['filter']) )
              {
                $filter = (int) $_GET['filter'];
              }
              if( isset($_GET['proiz']) )
              {
                $proiz = (int) $_GET['proiz'];
              }
              
              $total_count_q = mysqli_query($connection, "SELECT COUNT(`Id`) AS `total_count`  FROM `product` WHERE `id_articles` = $srt ");
              $total_count = mysqli_fetch_assoc($total_count_q);
              $total_count = $total_count['total_count'];
              
              $total_pages = ceil($total_count / $per_page);
              if( $page <= 1 || $page > $total_pages)
              {
                $page = 1;
              }
              $offset = ($per_page * $page) - $per_page;
              $article = mysqli_query($connection, "SELECT * FROM `product` WHERE `id_articles` = $srt  LIMIT $offset, $per_page");
              $article_exists = true;
              if (mysqli_num_rows($article) <= 0)
              {
                echo 'Товар не найден';
                $article_exists = false;
              }
              $takecateg = mysqli_query($connection, "SELECT * FROM `articles` WHERE `Id` = $srt");
              $takecat = mysqli_fetch_assoc($takecateg);
              echo "<h1 class='namecateg'> ".$takecat['title']."</h1>";
              echo "<div class='col-lg-12 descriptioncateg'>".$takecat['description']."</div><br>";
              while($art = mysqli_fetch_assoc($article))
              {?>  <div class="col-lg-4">
                  <div class="telo">
                    <?php if($art['generator']=="Decomaster") { ?> <img src="https://decomaster.su/<?php echo $art['image']; ?>" style="max-width: 100%";> <?php } else {?>
                      <img src="includes/images/<?php echo $art['image']; ?>"  ><?php } ?>
                      <h3 style="text-align: center;"><?php echo mb_substr($art['title'], 0, 41, 'utf-8'); ?></h3><h4>Производитель: <?php echo $art['generator']; ?></h4>
                      <?php $pricem = ceil($art['price']/$art['size']); ?>
                      <p class="fromprice"><h3 class="Rfromprice"><?php if($art['generator'] == "OracDecor"){echo $art['price']; echo " Руб./шт.";} 
                      else{echo $pricem; echo " Руб./м.пог."; }  ?> </h3><?php if($art['generator'] !== "OracDecor") {echo $art['price']; 
                      echo " Рублей/шт.";} ?></p>
                      <a href="/Sproduct.php?id=<?php echo $art['Id']; ?>" class="bat">Подробнее</a>
                      <a <?php if($art['generator'] == "OracDecor"){ echo" class='open_windorac'";} else {echo " class='open_wind'";}?> data-id="<?php echo $art['Id']; ?>">В корзину</a>
                  </div>
                   
              </div>
              <?php
              }
              ?>
              <div class="how_many"><a name="closehowmany" class="closeX">X</a><br><div>Сколько вам нужно метров?</div><br><div>
              <input type="number" name="onprc" style="text-align:center;"  class="to" /></div><br><div class="vivod"></div>
              <button class="for_id_on_product" data-id="<?php echo $art['Id']; ?>">Добавить</button>
            </div>
            <div class="how_manyorac"><a name="closehowmanyorac" class="closeX">X</a><br><div>Сколько вам нужно штук?</div><br><div>
              <input type="number" name="onprc2" style="text-align:center;"  class="to2" /></div><br>
              <button class="for_id_on_productorac" data-id="<?php echo $art['Id']; ?>">Добавить</button>
            </div>
            <div class="col-lg-12 afterclickbuy"><span name="closenow" style="float: right; cursor: pointer;">X</span><br> Товар добавлен в корзину!
                    <br>
                    <button class="btnclosenow2" name="closenow2">Продолжить покупки</button><br> <a href="../../ThisCart.php">Перейти в корзину</a></div>
            </div>
    </div>
</div>
<br>
<br>
<br>
<br>
 <div class="container">
      <div class="row centered">
        <div class="col-lg-6 col-lg-offset-5">
          <?php
              if($article_exists == true)
                {
                echo '<div class="paginator">';
                if( $page > 1 )
                {
                  echo '<a class="pag" href="/Products2.php?page='.($page - 1).'&id_articles='.($srt).'" >Прошлая страница</a>';
                }
                if( $page < $total_pages )
                {
                  echo '<a class="pag" href="/Products2.php?page='.($page + 1).'&id_articles='.($srt).'">Следующая страница</a>';
                }
                echo '</div>';
                }
              ?>
        </div>
      </div>
    </div>