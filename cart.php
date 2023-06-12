<?php
session_start();
require_once 'core/db.php';
$cart = mysqli_query($connect, "SELECT * FROM `cart` INNER JOIN products ON products.id_product = cart.id_product INNER JOIN users_meduza ON users_meduza.id_user = cart.id_user ");
$itog = 0;
?>
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
    <header class="header">
        <a href="index.php"><div class="medu">MEDUZA</div></a>
    </header>
	
	<main class="main">
		<div class="kor"><img src="img/корзина.svg"></div>
        <div class="ko">Корзина</div>

    <?php if (isset($_SESSION['cart_list']) && count($_SESSION['cart_list']) != 0):?>
        <div class="products">
        <?php while($product=mysqli_fetch_assoc($cart)):
            $itog += $product['total_price_cart'];
            if($product['id_type_product'] == 1):?>
            <div class="product">
                <div class="txt">
                    <div class="info">
                        <p class="name ticket"><?=$product['name_product']?></p>
                    </div>
                    <div class="chng">
                        <div class="quality">
                            <a href="core/func_cart.php?add_id=<?=$product['id_product']?>">
                            <svg width="52" height="50" viewBox="0 0 52 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="52" height="50" rx="13" fill="#10284C"/>
                                <path d="M26 10L26 40" stroke="white" stroke-width="4" stroke-linecap="round"/>
                                <path d="M11 25L41 25" stroke="white" stroke-width="4" stroke-linecap="round"/>
                            </svg>
                            </a>
                            <p><?=$product['quantit_cart']?></p>
                            <a href="core/func_cart.php?delete_id=<?=$product['id_product']?>">
                            <svg width="52" height="50" viewBox="0 0 52 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="52" height="50" rx="13" fill="#10284C"/>
                                <path d="M11 25L41 25" stroke="white" stroke-width="4" stroke-linecap="round"/>
                            </svg>
                            </a>
                        </div>
                        <p class="price"><?=$product['total_price_cart']?>₽</p>
                    </div>
                </div>
            </div>
            <?php else:?>
                <div class="product">
                <img src="<?=$product['image_product']?>">
                <div class="txt">
                    <div class="info">
                        <p class="name"><?=$product['name_product']?></p>
                        <p>Цвет: <?=$product['color_product']?></p>
                        <p>Размер: унисекс</p>
                    </div>
                    <div class="chng">
                        <div class="quality">
                            <a href="core/func_cart.php?add_id=<?=$product['id_product']?>">
                            <svg width="52" height="50" viewBox="0 0 52 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="52" height="50" rx="13" fill="#10284C"/>
                                <path d="M26 10L26 40" stroke="white" stroke-width="4" stroke-linecap="round"/>
                                <path d="M11 25L41 25" stroke="white" stroke-width="4" stroke-linecap="round"/>
                            </svg>
                            </a>
                            <p><?=$product['quantit_cart']?></p>
                            <a href="core/func_cart.php?delete_id=<?=$product['id_product']?>">
                            <svg width="52" height="50" viewBox="0 0 52 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="52" height="50" rx="13" fill="#10284C"/>
                                <path d="M11 25L41 25" stroke="white" stroke-width="4" stroke-linecap="round"/>
                            </svg>
                            </a>
                        </div>
                        <p class="price"><?=$product['total_price_cart']?>₽</p>
                    </div>
                </div>
            </div>
            <?php endif;?>
        <?php endwhile;?>
        <div class="itog">
            <p class="finaly">Итого: <?=$itog?>₽</p>
            <a href="core/pay.php" class="button">Купить</a>
        </div>
        </div>
    <?php else:?>
        <p class="null">Ваша корзина пуста</p>
    <?php endif;?>
	</main>
	
    <?php require_once('main_assets/footer_2.php');?>
</body>
</html>