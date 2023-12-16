<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $product_list = get_all_products();
    if ($_SESSION['is_user'] || !isset($_SESSION['is_user'])) {
        header('location: ../../index.php');
    } else {
        include_once '../view/products/_index.php';
    }
}