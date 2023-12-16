<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updateOrder = array(
        "id" => $_POST['id'],
        "code" => $_POST['code'],
        "status" => $_POST['status'],
        "users_id" => $_POST['users_id'],
        "address" => $_POST["address"],
        "phone" => $_POST["phone"],
        "date" => $_POST["date"],
    );

    update_order($updateOrder);

    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $order_id = $_GET['order_id'];
    $order = get_order($order_id);
    if ($_SESSION['is_user'] || !isset($_SESSION['is_user'])) {
        header('location: ../../index.php');
    } else {
        include_once '../view/orders/_edit.php';
    }
}