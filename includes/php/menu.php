<?php
require "config.php";
                    ?>

                        <br>
                        <form method="get" name="productfilt" action="Products.php" class="formcall">
 		                <input class="onsearch" type="text" name="title" placeholder="Искать здесь..."/>
  			            <button class="onbtn" class="qw" type="submit"></button>
                        </form> 
                        <br><br><br><br>
                        <ul class="tovar"  >
                            <li >
                                <a href="#">Плинтус МДФ</a>
                                <ul >
                                        <?php echo '<li><a href="/Products2.php?id_articles=1" class="menunav">Белый МДФ HANNAHHOLZ</a></li>' ?>
                                        <?php echo ' <li><a href="/Products2.php?id_articles=2" class="menunav">Плинтус HANNAHHOLZ Экошпон</a></li>'?>
                                         <?php echo ' <li><a href="/Products2.php?id_articles=19"class="menunav">Плинтус МДФ 81 мм NATUR</a></li>'?>
                                </ul>
                            </li>
                            <li >
                                <a href="#">Плинтус ПВХ</a>
                                <ul >
                                     <?php echo ' <li><a href="/Products2.php?id_articles=3" class="menunav">WIMAR 58</a></li>'?>
                                    <?php echo ' <li><a href="/Products2.php?id_articles=4" class="menunav">WIMAR 68</a></li>'?>
                                     <?php echo ' <li><a href="/Products2.php?id_articles=5" class="menunav">WIMAR 86</a></li>'?>
                                    <?php echo ' <li><a href="/Products2.php?id_articles=6" class="menunav">Декор пласт 67</a></li>'?>
                                </ul>
                            </li>
                            <li >
                                <a href="#">Плинтус из дюрополимера</a>
                                <ul >
                                        <?php echo '<li><a href="/Products2.php?id_articles=7" class="menunav">OracDecor</a></li>' ?>
                                        <?php echo '<li><a href="/Products2.php?id_articles=14" class="menunav">DECOMASTER</a></li>' ?>
                                        <?php echo '<li><a href="/Products2.php?id_articles=16" class="menunav">Перфект</a></li>' ?>
                                        <?php echo '<li><a href="/Products2.php?id_articles=20" class="menunav">Плинтус NMC Wallstyl</a></li>' ?>
                                </ul>
                                        
                            </li>
                             <li >
                                <a href="#">Молдинги</a>
                                <ul >
                                        <?php echo '<li><a href="/Products2.php?id_articles=9" class="menunav">OracDecor</a></li>' ?>
                                        <?php echo '<li><a href="/Products2.php?id_articles=12" class="menunav">DECOMASTER</a></li>' ?>
                                        <?php echo '<li><a href="/Products2.php?id_articles=15" class="menunav">Углы DECOMASTER</a></li>'?>
                                        <?php echo '<li><a href="/Products2.php?id_articles=17" class="menunav">Перфект</a></li>' ?>
                                        <?php echo '<li><a href="/Products2.php?id_articles=21" class="menunav">Молдинги NMC Wallstyl</a></li>' ?>
                                </ul>
                            </li>
                             <li >
                                <a href="#">Карниз - для потолка</a>
                                <ul >
                                        <?php echo '<li><a href="/Products2.php?id_articles=8" class="menunav">OracDecor</a></li>' ?>
                                        <?php echo '<li><a href="/Products2.php?id_articles=13" class="menunav">DECOMASTER</a></li>' ?>
                                        <?php echo '<li><a href="/Products2.php?id_articles=18" class="menunav">Перфект</a></li>' ?>
                                        <?php echo '<li><a href="/Products2.php?id_articles=22" class="menunav">Потолочный карниз NMC Wallstyl</a></li>' ?>
                                </ul>
                            </li>
                             <li >
                                <a href="#">Декоративные элементы</a>
                                <ul >
                                        <?php echo '<li><a href="/Products2.php?id_articles=10" style = "text-decoration: none; color: white;">OracDecor</a></li>' ?>
                                </ul>
                            </li>
                             <li >
                                <a href="#">Скрытое освещение</a>
                                <ul >
                                        <?php echo '<li><a href="/Products2.php?id_articles=11" style = "text-decoration: none; color: white;">OracDecor</a></li>' ?>
                                </ul>
                            </li>
                            <li >
                                <a href="#">Аксессуары</a>
                                <ul>
                                    <?php echo ' <li><a href="/acsessories.php" style = "text-decoration: none; color: white;">Аксессуары к плинтусу</a></li>'?>
                                </ul>
                            </li>
                        </ul>
                                 
                         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
                           <script>
                           $(".tovar>li>a").click(function(e){
                               e.preventDefault();

                                var menu = $(this).closest('.tovar');
                               if(false== $(this).next().is(':visible')){
                                   menu.find('li').removeClass('slide active');
                                   menu.find('ul').slideUp();
                               }
                               $(this).next().slideToggle();
                               $(this).parent().addClass('slide');
                           })
                          </script>
                                    