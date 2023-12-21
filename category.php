<?php
include_once './core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // lấy số trang
    $pageNumber = intval((count(get_all_products()) / 8) + 1);
    $page = 1;
    if (isset($_GET['page'])) {
        $page = intval($_GET['page']) > 0 ? intval($_GET['page'])  : 1;
    }

    $price = array(
        'minPrice' => 20,
        'maxPrice' => 400,
    );
    if (isset($_GET['minPrice']) && isset($_GET['maxPrice'])) {
        $price = array(
            'minPrice' => intval($_GET['minPrice']),
            'maxPrice' => intval($_GET['maxPrice']),
        );
    }
    $productPriceFilter = get_products_by_price($price);
    var_dump($productPriceFilter).die();
    $productList = get_products_by_page($page);


    include_once './view/_category.php';
}
