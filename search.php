<?php
include_once './core/db/boot.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $orderItemProduct = get_all_order_items();
    $productList = get_all_products_category();

    //search
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        $GLOBALS['productSearch'] = search_product($name);
    }
    //end

    include_once './view/_search.php';


}
