<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Корзина</title>
	<link rel="stylesheet" href="css/korzina.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php require_once('main_assets/header_2.php')?>
	
	<main class="main">
		<div class="kor"><img src="img/корзина.svg"></div>
        <div class="ko">Корзина</div>

        <div class="shirt"><img src="img/фон_товара.svg">
        <div class="futbolk"><img src="img/футболка.png"></div>
        <div class="nazc">Футболка (взрослая)</div>
        <div class="opisanie">Цвет: серый
            <p>Размер: унисекс</p></div></div>

        <div class="cap"><img src="img/фон_товара.svg">
        <div class="kepka"><img src="img/кепка.png"></div>
        <div class="nazv">Кепка (взрослая)</div>
        <div class="opi">Цвет: коричневый
        <p>Размер: унисекс</p></div></div>

        <div class="lamantin"><img src="img/фон_товара.svg">
            <div class="lamant"><img src="img/ламантин.png"></div>
            <div class="nazva">Ламантин</div>
            <div class="opis">Цвет: светло-серый</div></div>

            <button>Купить</button>
	</main>
	
    <?php require_once('main_assets/footer_2.php');?>
</body>
</html>