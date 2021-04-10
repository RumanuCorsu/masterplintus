  <?php require "config.php";?>

 <div>
                <h2 style="color:black;">Как с нами связаться?</h2>
                <hr>
                <div style=" font-size: 150%;" class="col-lg-4 tec">Номер телефона: 89236279091 <br> Адрес эллектронной почты: master-plintus@mail.ru <br> Наш адрес: г.Москва, Киевское шоссе, 21-й киллометр. Рынок СтройМастер, пав. 277 <br><br> Хотите заказать обратный звонок?
                <dialog class = "dialog">
                    <button id="close"><span>X</span></button><br>
                    <form method="post" class="formcall">
                  <div  class="form1"> <font style="font-size: 90%;">Что бы заказать обратный звонок, заполните форму ниже:</font><br><br>
                    <font style="font-family: 'Lato', sans-serif; font-size: 70%;">Ваше имя:</font><br><input type="text" name="name" required /><br>
                    <font style="font-family: 'Lato', sans-serif; font-size: 70%;">Ваш телефон:</font><br> <input type="text" name="phone" style="margin-bottom: 10px;" required />
                    <div class="g-recaptcha" data-sitekey="6LcPq-sUAAAAAB7q-f2NGT8SR-MZPK2rlRgyjcfx"></div>
                    <input type="submit" style="margin-top: 10px;"/>
                    </div> 
                    </form>
                </dialog>
                <br>
                <input type="button" value="Заказать" id="show"/></div>
                <div class="col-lg-6" ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4504.772579040798!2d37.44207692926335!3d55.63009372887834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b553112bf28b19%3A0xcca8e080ab38cb13!2z0YDRi9C90L7QuiDQodGC0YDQvtC50LzQsNGB0YLQtdGA!5e0!3m2!1sru!2sru!4v1590405070069!5m2!1sru!2sru" width="100%" height="auto" frameborder="0" style="border:0; margin-top: 80px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
            </div>      

             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
   
        $("input[id='show']").click(function() {
            $("dialog[class='dialog']").slideDown("fast");
        });
        $("button[id='close']").click(function() {
            $("dialog[class='dialog']").slideUp("fast");
        });
   </script>

<?php
    $recaptcha = $_POST['g-recaptcha-response']; 
    if(!empty($recaptcha)) {
    $recaptcha = $_REQUEST['g-recaptcha-response'];
    $secret = '6Ld3dOsUAAAAAGYA9y2gvC3AQ2moFXxqLZ1UboQW';
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret ."&response=".$recaptcha."&remoteip=".$_SERVER['REMOTE_ADDR'];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:8.0) Gecko/20100101 Firefox/8.0");
    $curlData = curl_exec($curl);
    curl_close($curl); 
    $curlData = json_decode($curlData, true);
  
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $name = htmlspecialchars($name);
    $phone = htmlspecialchars($phone);
    $name = urldecode($name);
    $phone = urldecode($phone);
    $name = trim($name);
    $phone = trim($phone);
    mail("baraka.channel@gmail.com", "Заказ на обратный звонок", "Имя:".$name.". Телефон: ".$phone ,"From: work@master-plintus.ru \r\n");
     }?>  
