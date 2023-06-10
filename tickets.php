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
	<header class="header">
	<a href="index.php"><div class="medu">MEDUZA</div></a>
	</header>
	
	<main class="main">
        <div class="text">Ознакомиться с ценами и приобрести билеты можно на этой странице.</div>

		<div class="biletone"><img src="img/фон_билет.svg">
		<div class="textone">Семейный билет (2+1)</div>
		<div class="zenaone">1900₽</div>
		<button>Приобрести</button></div>

		<div class="biletdva"><img src="img/фон_билет.svg">
			<div class="textdva">Семейный билет (2+2)</div>
			<div class="zenadva">2300₽</div>
			<button>Приобрести</button></div>

		<div class="bilettri"><img src="img/фон_билет.svg">
			<div class="texttri">Детские билеты</div>
			<div class="zenatri">500₽</div>
			<button>Приобрести</button></div>

		<div class="biletche"><img src="img/фон_билет.svg">
			<div class="textche">Взрослые билеты</div>
			<div class="zenache">900₽</div>
			<button>Приобрести</button></div>
	</main>
	
    <?php require_once('main_assets/footer_2.php');?>
</body>
</html>