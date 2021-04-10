 <?php 
header('Content-type: text/html; charset=windows-1251');
 session_start();
        $spisok = $_SESSION['zakaz'];
        $familia = $_POST['familia'];
        $imya = $_POST['imya'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $place = $_POST['place'];
        $city = $_POST['city'];
        $dostav = $_POST['dostav'];
        $comment = $_POST['comment'];
        $pay = $_POST['pay'];
        mail("baraka.channel@gmail.com", "Заказ товаров", "Товар:".$spisok.". Фамилия и имя заказчика:".$familia. " "  .$imya.". Почта заказчика:".$email.". Номер телефона заказчика:".$number.". Адрес заказчика:".$place. " " .$city.". Способ доставки выбрали: ".$dostav.". Комментарий(если поле пустое то не оставили): ".$comment.". Способ оплаты выбран: ".$pay ,"From: work@master-plintus.ru \r\n");
     