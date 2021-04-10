<?php require "includes/php/config.php";
session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Доставка</title>
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/dostavka.css">
</head>
<body class="back">
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
                    <li ><a href="AboutUs.php">О нас</a></li>
                    <li><a href="Calling.php">Контакты</a></li>
                    <li><a href="Products.php">Товары</a></li>
                    <li class="active"><a href="Dostavka.php">Доставка</a></li>
                    <li><a href="States.php">Статьи</a></li>
                    <li><?php require "includes/php/cart.php"; ?></li>    
                </ul>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container-fluid">
    <div class="row centered">
    <div class="col-lg-12">
    <br><h1 class="r">Доставка</h1>
    </div>
    <div class="col-lg-12">
        <h2 class="r" style="color:black;">Здесь вы можете найти подробную информацию о доставке.</h2>
        <div class="textR">Заказы на сумму менее 6000 ₽ не доставляются.<br>
            Вы можете забрать заказ самостоятельно по адресу: г.Москва Киевское шоссе, 21-й киллометр. Рынок СтройМастер, пав. 277<br>
        <br>
        Мы лояльно относимся к клиенту, понимаем, что часто плинтус заказывают на одну комнату, поэтому и сумму минимального заказа не повышаем, выдерживаем на уровне 6000 ₽. Что ниже, чем у других аналогичных компаний.<br>
        <br>
        Доставка по Москве и Московской области в пределах Московского малого кольца осуществляется нашим автопарком до подъезда или строительной площадки.<br>
        <br>
        Доставка по Москве в пределах МКАД - 500 ₽ при заказе на сумму от 6000 ₽.<br>
        Доставка за пределами МКАД не более 5 км от МКАД - 600 ₽, более 5 км - 1200 ₽.<br>
        Доставка за пределами Московского малого кольца - по договорённости.<br>
        Доставка до транспортной компании и оформление - 600 ₽.<br>
        Мы сотрудничаем с:<br>
        Деловые линии<br>
        ПЭК<br>
        также рассмотрим ваши пожелания по транспортной компании.<br>
        Подъём на этаж:<br>
        при наличии лифта – 200 ₽ за упаковку плинтуса,<br>
        при отсутствии лифта – 200 ₽ за упаковку плинтуса за каждый этаж.<br>
        <br>
        Вы можете долго искать, но не найдёте лучших условий доставки плинтуса по Москве и Московской области.<br>
        <br>
        Ведь у нас:<br>
        <br>
        низкий порог минимального заказа<br>
        сроки доставки самые быстрые<br>
        стоимость доставки низкая<br>
        вежливый и доброжелательный персонал<br>
        Доставка в удалённые регионы<br>
        В удалённые регионы заказы доставляет та транспортная компания, которую выбирает клиент.<br>
        <br>
        В наши услуги входит:<br>
        <br>
        КАЧЕСТВЕННАЯ упаковка заказов, гарантирующая сохранность товарного вида и целостность купленной вами продукции<br>
        доставка ДО транспортной компании<br>
        оформление отгрузочных документов в ТК<br>
        также ДО передачи заказа в ТК мы окончательно всё согласовываем с клиентом, показываем, что упакован именно его заказ, дожидаемся оплаты,<br> показываем стоимость доставки, если есть возможность и только после этого передаём заказ на доставку<br>
        </div>
    </div>
    </div>
    </div>
    <br>
    <?php include "includes/php/foot.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>