<?php
session_start();
require_once 'db.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$check_user = mysqli_query($connect, "SELECT * FROM `users_meduza` WHERE `email_user` = '$email' AND `password_user` = '$password'");
if(isset($email) && !empty($email) && isset($password) && !empty($password)) {
    if (preg_match("/^[A-Z]{1}[a-zA-Z\d]*[`~!@#$%^&*()_+-={}|:;<>?,.\/\"\'\\\[\]]{1}+$/", $_POST['password'])) {
        if (mysqli_num_rows($check_user) > 0) {

            $user = mysqli_fetch_assoc($check_user);
        
            $_SESSION['user'] = [
                "id_user" => $user['id_user'],
                "name_user" => $user['name_user'],
                "surname_user" => $user['surname_user'],
                "email_user" => $user['email_user'],
            ];

            header('Location: ../index.php');
        } else {
            $_SESSION['message'] = 'Не верный логин или пароль!';
            header('Location: ../authorization.php');
        }
    } else {
        $_SESSION['message'] = 'Пароль должен быть на латинице и цифрах, начинаться с заглавной буквы и закачиваться на символ!';
        header('Location: ../authorization.php');
    }
} else {
    $_SESSION['message'] = 'Введите данные!';
    header('Location: ../authorization.php');
}