<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = get_all_user();
    foreach( $user as $id){
        if ($id['name'] == $_POST["users_id"]) {
            $_POST["users_id"] = $id['id'];
            break;
        }
    }
    $createOrder = array(
        "id" => $_POST['id'],
        "code" => $_POST['code'],
        "status" => $_POST['status'],
        'users_id' => $_POST['users_id'],
        "address" => $_POST["address"],
        "phone" => $_POST["phone"],
        "date" => $_POST["date"],
    );
    insert_order($createOrder);

    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $userName = get_all_user();
    if ($_SESSION['is_user'] || !isset($_SESSION['is_user'])) {
        header('location: ../../index.php');
    } else {
        include_once '../view/orders/_create.php';
    }
   
}