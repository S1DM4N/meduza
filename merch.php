<?php 
	require_once('core/db.php');

	$check_cloth= mysqli_query($connect, "SELECT * FROM `products` WHERE `id_type_product` = '2'");
    $check_toys= mysqli_query($connect, "SELECT * FROM `products` WHERE `id_type_product` = '3'");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Мерч</title>
	<link rel="stylesheet" href="css/merch.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php require_once('main_assets/header_2.php')?>
	
	<main class="main">
        <div class="text"><p>Весь наш мерч можно приобрести на данной странице. 
            Все полученные средства пойдут на содержание нашего океанариума.
            
            <p>О способах и датах доставки вы можете узнать в своём личном кабинете. 
            Возможен также самовывоз в наш океанариум.</p></div>

            <!-- одежда -->
            <h1>Одежда</h1>
            <div class="products">
            <?php while($cloth = mysqli_fetch_assoc($check_cloth)):?>
                <div class="product">
                    <img src="<?=$cloth['image_product']?>">
                    <p class="name"><?=$cloth['name_product']?></p>
                    <div class="desc">
                        <p>Цвет: <?=$cloth['color_product']?></p>
                        <p>Размер: унисекс</p>
                    </div>
                    <a href="cart.php?product_id=<?=$cloth['id_product']?>" class="button">Приобрести</a>
                </div>
            <?php endwhile;?>
            </div>
            
            <!-- игрушки -->
            <h1 class="igrushki">Игрушки</h1>
            <div class="products">
            <?php while($toys = mysqli_fetch_assoc($check_toys)):?>
                <div class="product">
                    <img src="<?=$toys['image_product']?>">
                    <p class="name"><?=$toys['name_product']?></p>
                    <div class="desc">
                        <p>Цвет: <?=$toys['color_product']?></p>
                    </div>
                    <a href="cart.php?product_id=<?=$toys['id_product']?>" class="button">Приобрести</a>
                </div>
            <?php endwhile;?>
            </div>
	</main>
	
    <?php require_once('main_assets/footer_2.php');?>
</body>
</html>