<?php
session_start();
require_once 'core/db.php';
$id_user = $_SESSION['user']['id_user'];
$orders = mysqli_query($connect, "SELECT * FROM `orders` WHERE `id_user` =  '$id_user'");


?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Личный кабинет</title>
	<link rel="stylesheet" href="css/user profile.css">
        <link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
	<header class="header">
        <a href="index.php"><div class="medu">MEDUZA</div></a>
        <a href="core/log_out.php"><div class="out">Выйти</div></a>
	</header>
	
	<main class="main">
        <div class="lichniy">Личные данные</div>
        <div class="pers_data">
                <div class="blck">
                        <div class="infoname">Имя</div>
                        <div class="vivodname"><?=$_SESSION['user']['name_user']?></div>
                </div>
                <div class="blck">
                        <div class="infofam">Фамилия</div>
                        <div class="vivodfam"><?=$_SESSION['user']['surname_user']?></div>
                </div>
                <div class="blck">
                        <div class="infoemail">Email</div>
                        <div class="vivodemail"><?=$_SESSION['user']['email_user']?></div>
                </div>
        </div>

        <div class="history">
        <div class="text">История покупок</div>
        <?php foreach($orders as $order):?>
        <div class="backbilet">
                <p>Заказ №<?=$order['id_order']?></p>
                <p>Дата: <?=$order['date_time']?></p>
        </div>
        <?php endforeach;?>
        <a href="cart.php" class="korzn"><img src="img/корзина.svg">Корзина</a>
	</main>
	
        <footer class="footer">
                <a href ="about_us.php"><div class="onas">О нас</div></a>
                <a href="garanty.php"><div class="garant">Гарантии</div></a>
                <a href ="contacts.php"><div class="cont">Контакты</div></a>
                <a href ="services.php"><div class="yslyg">Услуги</div></a>
	</footer>
</body>
</html>