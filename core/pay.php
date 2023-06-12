<?php 
session_start();
require_once 'db.php';

$id_user = $_SESSION['user']['id_user'];

$cart = mysqli_query($connect, "SELECT * FROM `cart` WHERE `id_user` = '$id_user'");

if(mysqli_num_rows($cart) > 0) {
mysqli_query($connect, "INSERT INTO `orders` (`id_order`, `id_user`, `date_time`) VALUES (NULL, '$id_user',now())");
mysqli_query($connect, "DELETE FROM `cart` WHERE `id_user` = '$id_user'");
header('Location: ../cabinet.php');
unset($_SESSION['cart_list']);// удаление массива из сессии по ключу
}

else {
    header('Location: ../cart.php');
}