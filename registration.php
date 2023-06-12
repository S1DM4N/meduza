<?php session_start(); 
if (isset($_SESSION['user'])) {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Регистрация</title>
	<link rel="stylesheet" href="css/registrazia.css">
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
        <form class="chti" action="core/log_in.php" method="post">
			<p class="nm">Регистрация</p>
			<input name="name" type="name" placeholder="Имя">
			<input name="surname" type="secondname" placeholder="Фамилия">
			<input name="email" type="email" placeholder="Email">
			<input name="password" type="password" placeholder="Пароль">
			<input name="conf_password" type="password" placeholder="Подтвердите пароль">
			<button>Войти</button>
		</form>
		<?php 
            if (isset ($_SESSION['message'])) {
                echo '<div class= mes><p class=msg>' . $_SESSION['message'] . ' </p></div>';
            }
            unset($_SESSION['message']);
        ?>
	</main>
	
	<footer class="footer">
        <div class="reg">Есть аккаунт? <a href="authorization.php">Авторизируйтесь!</a></div>
	</footer>
</body>
</html>