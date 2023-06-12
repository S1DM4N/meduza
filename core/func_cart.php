<?php
session_start();


require_once "db.php";
require_once "function.php";

$_SESSION['quantity'] = 1;

$id_user = $_SESSION['user']['id_user'];

if ( isset($_GET['product_id']) && !empty($_GET['product_id']) ) { //Проверка на существование Get запроса

	$current_added_product = get_product_by_id($_GET['product_id']); // Получение массива из БД при помощи функции get_product_by_id

	if ( !empty($current_added_product) ) { // Если массив пустой, то переадресация на главную страницу

		if ( !isset($_SESSION['cart_list'])) { // Проверка на сущствование сессии корзины (корзина пустая)
			$_SESSION['cart_list'][] = $current_added_product; // Запись в сессию массива
            $total_price_cart = $current_added_product['price_product']; //Запись в БД
            $id_product = $current_added_product['id_product'];
            mysqli_query($connect, "INSERT INTO `cart` (`id_cart`, `id_product`, `id_user`, `quantit_cart`, `total_price_cart`) VALUES (NULL, '$id_product', '$id_user', '1', '$total_price_cart') ");
            header('Location: ../cart.php');
		}


		$product_check = false; // индетификатор

		if ( isset($_SESSION['cart_list']) ) { // Если сессия существует (В корзине есть товары)
			foreach ($_SESSION['cart_list'] as $value) { // Перебираем масив корзины
				if ( $value['id_product'] == $current_added_product['id_product'] ) { // Проверка на добавленый товар в корзине
					$product_check = true; // Отмечаем
                    header('Location: ../cart.php');
				}
			}
		}


		if ( !$product_check ) { // Если совпадения с продуктом не найдено
			$_SESSION['cart_list'][] = $current_added_product; // Добавляем в сессию массив
            $total_price_cart = $current_added_product['price_product']; //Запись в БД
            $id_product = $current_added_product['id_product'];
            mysqli_query($connect, "INSERT INTO `cart` (`id_cart`, `id_product`, `id_user`, `quantit_cart`, `total_price_cart`) VALUES (NULL, '$id_product', '$id_user', '1', '$total_price_cart') ");
            header('Location: ../cart.php');
		}

	} else {
		header("Location: index.php");
	}
}


if ( isset($_GET['add_id']) && isset($_SESSION['cart_list']) ) {//Проверка на сущетсвование Get запроса
    foreach ($_SESSION['cart_list'] as $key => $value) {// перебор массива
        if ( $value['id_product'] == $_GET['add_id'] ) {// поиск совпадений по ID
            $id_product = $value['id_product'];
            $cart = mysqli_query($connect, "SELECT * FROM `cart` WHERE `id_product` = '$id_product'");
            while($carts = mysqli_fetch_assoc($cart)){
                $id_cart = $carts['id_cart'];
                $i = ++$carts['quantit_cart'];
                $total_price_cart = $value['price_product'] * $i;
                mysqli_query($connect, "UPDATE `cart` SET `quantit_cart` = '$i', `total_price_cart` = '$total_price_cart' WHERE `cart`.`id_cart` = '$id_cart'");
                header('Location: ../cart.php');
            }
        }		
    }
}



if ( isset($_GET['delete_id']) && isset($_SESSION['cart_list'])) {//Проверка на сущетсвование Get запроса
    foreach ($_SESSION['cart_list'] as $key => $value) {// перебор массива
        if ( $value['id_product'] == $_GET['delete_id'] ) {// поиск совпадений по ID
            $id_product = $value['id_product'];
            $cart = mysqli_query($connect, "SELECT * FROM `cart` WHERE `id_product` = '$id_product'");
            while($carts = mysqli_fetch_assoc($cart)){
                if($carts['quantit_cart'] == 1){
                    $total_price_cart = $carts['total_price_cart'] - $value['price_product'];
                    unset($_SESSION['cart_list'][$key]);// удаление массива из сессии по ключу
                    mysqli_query($connect, "DELETE FROM `cart` WHERE `id_product` = '$id_product'");
                    header('Location: ../cart.php');
                }
                else {
                    $id_cart = $carts['id_cart'];
                    $i = --$carts['quantit_cart'];
                    $total_price_cart = $carts['total_price_cart'] - $value['price_product'];
                    mysqli_query($connect, "UPDATE `cart` SET `quantit_cart` = '$i', `total_price_cart` = '$total_price_cart' WHERE `cart`.`id_cart` = '$id_cart'");
                    header('Location: ../cart.php');
                }
            }
        }		
    }
}
?>