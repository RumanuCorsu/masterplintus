<?php require "config.php";
?>

<div id="f">
        <div class="container-fluid">
            <div class="row centered">
                <div class="col-lg-4">
                    <h3 style="margin-left: 5%;">Информация</h3>
                    <div>
                        <a href="../AboutUs.php">О нас</a><br>
                        <a href="../Calling.php">Связаться</a><br>
                        <a href="../Dostavka.php">Информация о доставке</a><br>
                    </div>
                </div>
                
                    <div class="col-lg-4">
                        <h3>Контакты</h3>
                            <div style="color:white;">89236279091<br>
                            master-plintus@mail.ru</div>
                        
                    </div>
                    
                        <div class="col-lg-4">
                            <h3>Соц.Сети</h3>
                            <div>
                                <i class="fa fa-vk" aria-hidden="true" style="background-color: white; padding: 1px; color: rgb(51, 153, 255);">
                                </i> - <a href="https://vk.com/tt.origin" target="_blank">Создатель сайта</a>
                            </div>
                        </div>
            </div>
        </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    var closehow = $("a[name='closehowmany']");
    closehow.bind('click', function(){
        $(".how_many").css('display', 'none');
        $(".modal-wrapper").css('display', 'none');
    });
    var afterchange = $(".for_id_on_product");
    afterchange.bind('click', function(){

         $(".how_many").css('display', 'none');
        $(".modal-wrapper").css('display', 'none');
    });
    var closehoworac = $("a[name='closehowmanyorac']");
    closehoworac.bind('click', function(){
        $(".how_manyorac").css('display', 'none');
        $(".modal-wrapper").css('display', 'none');
    });
     var afterchangeorac = $(".for_id_on_productorac");
    afterchangeorac.bind('click', function(){

         $(".how_manyorac").css('display', 'none');
        $(".modal-wrapper").css('display', 'none');
    });
    var takechecbox;
    var takecheck = $("input[name='filter']");
    $.each(takecheck, function(){
        $(this).bind('click', function(){

            if($(this).is(':checked'))
            {
                takechecbox = $(this).attr('value');
            }

        });
    });
</script>
<script src="../../js/main.js" ></script>