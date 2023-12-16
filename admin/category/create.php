<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $createCategory= array(
    "image" => $_POST['image'],
    "name" => $_POST['name'],
    "description" => $_POST['description'],
   );
    insert_category($createCategory);

    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_SESSION['is_user'] || !isset($_SESSION['is_user'])) {
        header('location: ../../index.php');
    } else {
        include_once '../view/category/_create.php';
    }
}