<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category = get_all_categories();
    foreach( $category as $id){
        if ($id['name'] == $_POST["category_id"]) {
            $_POST["category_id"] = $id['id'];
            break;
        }
    }
    $createProduct = array(
        "image" => $_POST['image'],
        "name" => $_POST['name'],
        "description" => $_POST["description"],
        "price" => $_POST["price"],
        "quantity" => $_POST["quantity"],
        "category_id" => $_POST["category_id"]
    );
    insert_product($createProduct);

    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $nameCategory = get_all_categories();
    if ($_SESSION['is_user'] || !isset($_SESSION['is_user'])) {
        header('location: ../../index.php');
    } else {
        include_once '../view/products/_create.php';
    }
}
