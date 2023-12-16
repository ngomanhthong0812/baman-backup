<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $order_list = get_all_orders();
    if ($_SESSION['is_user'] || !isset($_SESSION['is_user'])) {
        header('location: ../../index.php');
    } else {
        include_once '../view/orders/_index.php';
    }
}