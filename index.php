<?php
include_once './core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $productList = get_all_products();
    $orderItemProduct = get_all_order_items();
    include_once './view/_home.php';
}
