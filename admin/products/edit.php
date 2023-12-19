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
    $updateProduct = array(
        "id" => $_POST['id'],
        "image" => $_POST['image'],
        "name" => $_POST['name'],
        "description" => $_POST["description"],
        "price" => $_POST["price"],
        "quantity" => $_POST["quantity"],
        "category_id" => $_POST["category_id"],
    );

    update_product($updateProduct);

    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $product_id = $_GET['product_id'];
    $categoryList = get_all_categories();
    $product = get_product($product_id);
    if ($_SESSION['is_user'] || !isset($_SESSION['is_user'])) {
        header('location: ../../index.php');
    } else {
        include_once '../view/products/_edit.php';
    }
}