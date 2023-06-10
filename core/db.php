<!-- Подключение к БД -->
<?php
    $connect = mysqli_connect('localhost' ,'root', '', 'meduza');
if (!$connect) {
    die("Ошибка: " . mysqli_connect_error());
}