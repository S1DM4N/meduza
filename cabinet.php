<?php session_start();?>

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
    
        <div class="backbilet"><div class="bilet">данные билета</div></div>
        <div class="backpokypki"><div class="pokypki">данные покупки</div></div></div>

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