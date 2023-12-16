<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $category_list = get_all_categories();
    if ($_SESSION['is_user'] || !isset($_SESSION['is_user'])) {
        header('location: ../../index.php');
    } else {
        include_once '../view/category/_index.php';
    }
}