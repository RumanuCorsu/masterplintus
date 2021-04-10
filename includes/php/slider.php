 <?php require "config.php";?>

  <div class="container">
       <div class="row centered">
           <div class="col-lg-4 ">
           <?php include "includes/php/menu.php";?>   
            </div>
            <div class="col-lg-8">
            <div class="all">
                    <input checked type="radio" name="respond" id="desktop">
                <article id="slider">
                    <input checked type="radio" name="slider" id="switch1">
                    <input type="radio" name="slider" id="switch2">
                    <input type="radio" name="slider" id="switch3">
                    <input type="radio" name="slider" id="switch4">
                    <input type="radio" name="slider" id="switch5">
                    <div id="slides">
                        <div id="overflow">
                            <div class="image">
                            <article> <img src="img/1.jpg"><div class="buddy" ><a href="Products.php" 
                            style="background-color: rgb(204, 69, 0); color:  white; padding: 1%;">Перейти в каталог!</a></div> </article>
                            <article><img src="img/2.jpg"></article>
                            <article><img src="img/3.jpg"><div class="buddy"> <a href="Products.php" 
                                style="background-color: rgb(204, 69, 0); color:  white; padding: 1%;">Низкие цены!</a> </div></article>
                            <article><img src="img/4.jpg"></article>
                            <article><img src="img/5.jpg"><div class="buddy"> <a href="Products.php" 
                                style="background-color: rgb(204, 69, 0); color:  white; padding: 1%;">Большой выбор!</a> </div></article>
                            </div>
                        </div>
                    </div>
                    <div id="controls">
                    <label for="switch1"></label>
                    <label for="switch2"></label>
                    <label for="switch3"></label>
                    <label for="switch4"></label>
                    <label for="switch5"></label>
                    </div>
                    <div id="active">
                    <label for="switch1"></label>
                    <label for="switch2"></label>
                    <label for="switch3"></label>
                    <label for="switch4"></label>
                    <label for="switch5"></label>
                    </div>
                </article>
            </div>
            </div>
        </div>
    </div>