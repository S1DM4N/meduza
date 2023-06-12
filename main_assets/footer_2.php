<footer class="footer">
        <a href="about_us.php"><div class="onas">О нас</div></a>
		<a href="garanty.php"><div class="garant">Гарантии</div></a>
		<a href="contacts.php"><div class="cont">Контакты</div></a>
		<a href="services.php"><div class="yslyg">Услуги</div></a>
        <?php        
        if (isset($_SESSION['user'])) {
            echo '<li><a href="cabinet.php"><div class="user"><img src="img/юзер.png"></a></li>';
        }
        else {
            echo '<li><a href="authorization.php"><div class="user"><img src="img/юзер.png"></a></li>';
        }
        ?>
</footer>