<?php 
session_start();
require_once 'db.php';


$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];
$conf_password = $_POST['conf_password'];
if(isset($name) & !empty($name) & isset($surname) & !empty($surname) & isset($email) & !empty($email) & isset($password) & !empty($password) & isset($conf_password) & !empty($conf_password)) {
    if (preg_match("/[А-Яа-яЁё]/u", $name & $surname)) {
        if (preg_match("/^[A-Z]{1}[a-zA-Z\d`~!@#$%^&*()_+-={}|:;<>?,.\/\"\'\\\[\]]*[`~!@#$%^&*()_+-={}|:;<>?,.\/\"\'\\\[\]]{1}+$/", $password)) {
            if (mysqli_num_rows(mysqli_query($connect, "SELECT `email_user` FROM `users_meduza` WHERE `email_user` = '$email'")) == 0) {    
                if (strlen($password) >= 8) {
                    if ($password === $conf_password) {
                        $password = md5($password);
                        
                        mysqli_query($connect, "INSERT INTO `users_meduza` (`id_user`, `name_user`, `surname_user`, `email_user`, `password_user`) VALUES (NULL, '$name', '$surname', '$email', '$password')");
                        $_SESSION['message'] = 'Регистрация прошла успешно!';
                        header('Location: ../authorization.php');

                    } else {
                        $_SESSION['message'] = 'Пароли не совпадают!';
                        header('Location: ../registration.php');
                    }
                } else {
                    $_SESSION['message'] = 'Пароль должен быть не менее 8 символов!';
                    header('Location: ../registration.php');
                }
            } else {
                $_SESSION['message'] = 'Данная почта уже зарегестрирована!';
                header('Location: ../registration.php');
            }
        } else {
            $_SESSION['message'] = 'Пароль должен быть на латинице, начинаться с заглавной буквы, а заканчиваться на символе!';
            header('Location: ../registration.php');
        }
    } else {
        $_SESSION['message'] = 'Имя и фамилия должна быть на кирилице!';
        header('Location: ../registration.php');
    }
} else {
    $_SESSION['message'] = 'Введите данные!';
    header('Location: ../registration.php');
}