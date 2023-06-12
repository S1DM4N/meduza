<header class="header">
    <ul class="nav">
        <li><a href="index.php">MEDUZA</a></li>
        <li><a href="about_us.php">О нас</a></li>
        <li><a href="garanty.php">Гарантии</a></li>
        <li><a href="contacts.php">Контакты</a></li>
        <li><a href="services.php">Услуги</a></li>
        <?php session_start(); 
        if (isset($_SESSION['user'])) {
            echo '<li><a href="cabinet.php"><img src="img/юзер.png"></a></li>';
        }
        else {
            echo '<li><a href="authorization.php"><img src="img/юзер.png"></a></li>';
        }
        ?>
    </ul>
</header>