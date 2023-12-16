<?php
include_once './core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['_method'])) {
        switch ($_POST['_method']) {
            case 'delete':
                delete();
                break;
            case 'create':
                create();
                break;
            case 'update':
                update();
                break;
            case 'removeAll':
                deleteAll();
                break;
        }
    }
    header('location: cart.php');
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // $orderItemProduct = get_all_order_items();
    $productList = get_all_products();
    include_once './view/_cart.php';
}

function create()
{
    $isEmpty = true;
    if (isset($_SESSION['cart'])) {
        //Gio hang da ton tai
        $cart = $_SESSION['cart'];
        /**
         * Kiem tra san pham co trong gio hang
         * 1: Neu co cap nhat them so luong
         * 2: Neu khong thi them vao gio hang
         */
        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]['productId'] == $_POST['productId']) {
                $cart[$i]['quantity'] = $cart[$i]['quantity'] + $_POST['quantity'];
                $isEmpty = false;
                break;
            }
        }
    } else {
        //Lan dau dua vao gio hang. Gio hang chua ton tai
        $cart = array();
    }

    if ($isEmpty) {
        $order_item = array(
            'productId' => $_POST['productId'],
            'productName' => $_POST['productName'],
            'productImage' => $_POST['productImage'],
            'productPrice' => $_POST['productPrice'],
            'quantity' => $_POST['quantity'],
            'productDesciption' => $_POST['productDesciption'],
        );
        array_push($cart, $order_item);
    }

    $_SESSION['cart'] = $cart;
}

function delete()
{
    $cart = $_SESSION['cart'];
    if (isset($_POST['idRemove'])) {
        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]['productId'] == $_POST['idRemove']) {
                unset($cart[$i]);
            }
        }
        // Cập nhật lại chỉ số của mảng sau khi xoá
        $cart = array_values($cart);
    }
    $_SESSION['cart'] = $cart;
}

function update()
{
    $cart = $_SESSION['cart'];
    if (isset($_POST['idQuantityNumber']) && isset($_POST['quantityNumber'])) {
        if ($_POST['quantityNumber'] > 0) {
            for ($i = 0; $i < count($cart); $i++) {
                if ($cart[$i]['productId'] == $_POST['idQuantityNumber']) {
                    $cart[$i]['quantity'] = $_POST['quantityNumber'];
                    break;
                }
            }
        }
    }
    $_SESSION['cart'] = $cart;
}
function deleteAll()
{
    unset($_SESSION['cart']);
}
