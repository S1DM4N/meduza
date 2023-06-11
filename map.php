<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Интерактивная карта</title>
	<link rel="stylesheet" href="css/karta.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
	<?php require_once('main_assets/header_2.php')?>
	
	<main class="main">
		<div class="karta"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8ed4d36db40b99bd6a56b48a9e22bc1d6144eb81eee710d75992c42e45e50203&amp;width=1215&amp;height=681&amp;lang=ru_RU&amp;scroll=true"></script></div>
	<div class="tochk"><img src="img/точка2.svg"></div>
	<div class="tocjtext">Адрес: Кировоградская ул., 9к4, Москва, 117587</div>
	</main>
	
	<?php require_once('main_assets/footer_2.php');?>
</body>
</html>