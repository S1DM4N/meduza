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
	<title>Авторизация</title>
	<link rel="stylesheet" href="css/sing up.css">
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
        <form class="chti" action="core/sign_in.php" method="post"><p class="nm">Авторизация</p>
                <input name="email" type="email" placeholder="Email">
                <input name="password" type="password" placeholder="Пароль">
                <button type="submit">Войти</button>
		</form>
		<?php 
            if (isset ($_SESSION['message'])) {
                echo '<div class= mes><p class=msg>' . $_SESSION['message'] . ' </p></div>';
            }
            unset($_SESSION['message']);
        ?>
	</main>
	
	<footer class="footer">
        <div class="reg">Нет аккаунта? <a href="registration.php">Зарегистрируйтесь!</a></div>
	</footer>
</body>
</html>