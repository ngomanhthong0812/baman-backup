<?php
include_once './core/db/boot.php';

$arrUser = array(
    'name' => "",
    'phone' => "",
    'email' => "",
    'password' => "",
    'passwordConfirm' => "",
    'notificationEmail' => "",
    'notificationPhone' => "",
    'notificationPassword' => ""
);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $userListAll = get_all_user();
    if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['passwordConfirm'])) {
        if ((isset($_POST['register'])) && ($_POST['register'])) {
            $isUserListEmail = false;
            $isUserListPhone = false;

            $pattern = '/^0[0-9]{9}$/'; // check phone
            //preg_match so khớp
            $checkPhone = preg_match($pattern, $_POST['phone']);

            $user = array(
                'name' => $_POST['name'],
                'phone' => $_POST['phone'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'role' => "user"
            );
            if ($_POST['password'] == $_POST['passwordConfirm'] && !empty($checkPhone)) {
                if (empty($userListAll)) {
                    insert_user($user);
                    header('location: login.php');
                } else {
                    foreach ($userListAll as $userList) {
                        if ($userList['email'] == $_POST['email']) {
                            $isUserListEmail = true;
                        }
                        if ($userList['phone'] == $_POST['phone']) {
                            $isUserListPhone = true;
                        }
                    }
                    if (!$isUserListEmail && !$isUserListPhone) {
                        insert_user($user);
                        header('location: login.php');
                    } else {
                        if (!$isUserListEmail && $isUserListPhone) {
                            // $notificationEmail = "Email already exists.";
                            $arrUser['notificationPhone'] = "The Phone Number Already Exists.";
                            $arrUser['name'] = $_POST['name'];
                            $arrUser['phone'] = $_POST['phone'];
                            $arrUser['email'] = $_POST['email'];
                            $arrUser['password'] = $_POST['password'];
                            $arrUser['passwordConfirm'] = $_POST['passwordConfirm'];
                            include_once './view/_register.php';
                        } else if ($isUserListEmail && !$isUserListPhone) {
                            $arrUser['notificationEmail'] = "Email already exists.";
                            $arrUser['name'] = $_POST['name'];
                            $arrUser['phone'] = $_POST['phone'];
                            $arrUser['email'] = $_POST['email'];
                            $arrUser['password'] = $_POST['password'];
                            $arrUser['passwordConfirm'] = $_POST['passwordConfirm'];
                            include_once './view/_register.php';
                        } else {
                            $arrUser['notificationEmail'] = "Email already exists.";
                            $arrUser['notificationPhone'] = "The Phone Number Already Exists.";
                            $arrUser['name'] = $_POST['name'];
                            $arrUser['phone'] = $_POST['phone'];
                            $arrUser['email'] = $_POST['email'];
                            $arrUser['password'] = $_POST['password'];
                            $arrUser['passwordConfirm'] = $_POST['passwordConfirm'];
                            include_once './view/_register.php';
                        }
                    }
                }
            } else {
                if ($_POST['password'] != $_POST['passwordConfirm'] && !empty($checkPhone)) {
                    $arrUser['notificationPassword'] = "Passwords don't match";
                    $arrUser['name'] = $_POST['name'];
                    $arrUser['phone'] = $_POST['phone'];
                    $arrUser['email'] = $_POST['email'];
                    $arrUser['password'] = $_POST['password'];
                    $arrUser['passwordConfirm'] = $_POST['passwordConfirm'];
                    include_once './view/_register.php';
                } else if ($_POST['password'] == $_POST['passwordConfirm'] && empty($checkPhone)) {
                    $arrUser['notificationPhone'] = "invalid phone number";
                    $arrUser['name'] = $_POST['name'];
                    $arrUser['phone'] = $_POST['phone'];
                    $arrUser['email'] = $_POST['email'];
                    $arrUser['password'] = $_POST['password'];
                    $arrUser['passwordConfirm'] = $_POST['passwordConfirm'];
                    include_once './view/_register.php';
                } else {
                    $arrUser['notificationPassword'] = "Passwords don't match";
                    $arrUser['notificationPhone'] = "invalid phone number";
                    $arrUser['name'] = $_POST['name'];
                    $arrUser['phone'] = $_POST['phone'];
                    $arrUser['email'] = $_POST['email'];
                    $arrUser['password'] = $_POST['password'];
                    $arrUser['passwordConfirm'] = $_POST['passwordConfirm'];
                    include_once './view/_register.php';
                }
            }


        }
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $orderItemProduct = get_all_order_items();
    $productList = get_all_products();
    if (isset($_SESSION['email']) && $_SESSION['email'] != "") {
        header('location: index.php');
    } else {
        include_once './view/_register.php';
    }

}
