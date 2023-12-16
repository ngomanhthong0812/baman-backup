<?php
include_once './core/db/boot.php';

$arrUser = array(
    'email' => "",
    'password' => "",
    'notificationPasswordEmail' => ""
);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = get_user_by_email($email);
        if ((isset($_POST['login'])) && ($_POST['login'])) {
            $is_login = false;
            if ($user) {
                if ($user['password'] == $password) {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    $_SESSION['role'] = $user['role'];
                    $is_login = true;
                    $_SESSION['is_admin'] = false;
                    $_SESSION['is_user'] = false;
                }
            }
            if ($is_login) {
                if (isset($_SESSION['email']) && $_SESSION['email'] != "" && $_SESSION['isCheckout'] && $_SESSION['role'] == 'user') {
                    $_SESSION['is_user'] = true;
                    header('location: checkout.php');
                } else {
                    if (isset($_SESSION['email']) && $_SESSION['email'] != "" && $_SESSION['role'] == 'admin') {
                        $_SESSION['is_admin'] = true;
                        header('location: admin/statistics/index.php');
                    } else {
                        $_SESSION['is_user'] = true;
                        header('location: login.php');
                    }
                }
            } else {
                $arrUser['email'] = $_POST['email'];
                $arrUser['password'] = $_POST['password'];
                $arrUser['notificationPasswordEmail'] = "Invalid username or password";
                $is_login = false;
                include_once './view/_login.php';
            }
        }
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_SESSION['email']) && $_SESSION['email'] != "") {
        header('location: index.php');
    } else {
        include_once './view/_login.php';
    }
}
