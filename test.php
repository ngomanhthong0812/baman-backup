<?php
include_once './core/db/boot.php';
$products = get_all_products_category();
var_dump($products);
?>