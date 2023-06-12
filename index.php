<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Meduza / Главная</title>
	<link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
	<?php require_once('main_assets/header.php');?>
	<main class="main">
	<a href="contacts.php"><div class="cntc"><img src="img/контакты.png"></div></a>
        <a href="services.php"><div class="ysl"><img src="img/услуги.png"></div></a>
        <a href="news.php"><div class="nov"><img src="img/новости.png"></div></a>
        <a href="map.php"><div class="intr"><img src="img/интер.карта.png"></div></a>
	</main>
	
        <?php require_once('main_assets/footer.php');?>
</body>
</html>