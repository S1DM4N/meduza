<?php 
	require_once 'core/db.php';

	$check_product= mysqli_query($connect, "SELECT * FROM `products` WHERE `id_type_product` = '1'");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Билеты</title>
	<link rel="stylesheet" href="css/bileti.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
	<?php require_once('main_assets/header_2.php')?>
	
	<main class="main">
        <p class="text">Ознакомиться с ценами и приобрести билеты можно на этой странице.</p>
		<div class="tickets">
			<?php while($product = mysqli_fetch_assoc($check_product)):?>
				<div class="ticket">
					<p class="textdva"><?=$product['name_product']?></p>
					<p class="zenaone"><?=$product['price_product']?>₽</p>
					<a class="button" href="core/func_cart.php?product_id=<?=$product['id_product']?>">Приобрести</a>
				</div>
			<?php endwhile;?>
		</div>
	</main>
	
    <?php require_once('main_assets/footer_2.php');?>
</body>
</html>