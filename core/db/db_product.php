<?php
require_once 'mysql.php';
$pdo = get_pdo();

function get_all_products()
{
    global $pdo;

    $sql = "SELECT * FROM PRODUCTS";
    $stmt = $pdo->prepare($sql);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
    $productList = array();

    if (count($result) > 0) {
        // Hiển thị dữ liệu của bảng
        foreach ($result as $row) {
            $product = array(
                "id" => $row["id"],
                "image" => $row["image"],
                "name" => $row["name"],
                "description" => $row["description"],
                "price" => $row["price"],
                "quantity" => $row["quantity"],
                "category_id" => $row["category_id"]
            );
            array_push($productList, $product);
        }
    }

    return $productList;
}

function get_products_by_page($page)
{
    global $pdo;

    $perPage = 8;
    $begin = ($page - 1) * $perPage;

    $sql = "SELECT PRODUCTS.*, CATEGORIES.NAME AS category_name
    FROM PRODUCTS
    LEFT JOIN CATEGORIES ON PRODUCTS.category_id = CATEGORIES.id LIMIT $begin, $perPage";

    $stmt = $pdo->prepare($sql);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
    $productList = array();

    if (count($result) > 0) {
        // Hiển thị dữ liệu của bảng
        foreach ($result as $row) {
            $product = array(
                "id" => $row["id"],
                "image" => $row["image"],
                "name" => $row["name"],
                "description" => $row["description"],
                "price" => $row["price"],
                "quantity" => $row["quantity"],
                "category_name" => $row["category_name"]
            );
            array_push($productList, $product);
        }
    }

    return $productList;
}

function get_products_by_price($price)
{
    global $pdo;

    $sql = "SELECT * FROM PRODUCTS WHERE PRICE >= :minPrice AND PRICE <= :maxPrice";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':minPrice', $price['minPrice']);
    $stmt->bindParam(':maxPrice', $price['maxPrice']);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
    // Lặp kết quả và xây dựng mảng tên sản phẩm
    $price = array();
    foreach ($result as $row) {
        $price[] = $row['price'];
    }

    return $price;
}

function get_products_max_price()
{
    global $pdo;

    $sql = "SELECT PRICE FROM PRODUCTS ORDER BY PRICE DESC LIMIT 1";

    $stmt = $pdo->prepare($sql);


    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchColumn();
    // Lặp kết quả và xây dựng mảng tên sản phẩm


    return $result;
}

function get_products_min_price()
{
    global $pdo;

    $sql = "SELECT PRICE FROM PRODUCTS ORDER BY PRICE ASC LIMIT 1";

    $stmt = $pdo->prepare($sql);


    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchColumn();
    // Lặp kết quả và xây dựng mảng tên sản phẩm


    return $result;
}

function delete_product($product_id)
{
    global $pdo;

    $sql = "DELETE FROM PRODUCTS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $product_id);

    $stmt->execute();
}

function insert_product($product)
{
    global $pdo;
    $sql = "INSERT INTO PRODUCTS(ID, IMAGE, NAME, DESCRIPTION, PRICE, QUANTITY, CATEGORY_ID) VALUES(NULL, :image, :name, :description, :price, :quantity, :category_id)";
    $stmt = $pdo->prepare($sql);


    $stmt->bindParam(':image', $product['image']);
    $stmt->bindParam(':name', $product['name']);
    $stmt->bindParam(':description', $product['description']);
    $stmt->bindParam(':price', $product['price']);
    $stmt->bindParam(':quantity', $product['quantity']);
    $stmt->bindParam(':category_id', $product['category_id']);

    $stmt->execute();
}

function get_product($product_id)
{
    global $pdo;

    $sql = "SELECT * FROM PRODUCTS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $product_id);


    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row) {
        return array(
            "id" => $row["id"],
            "image" => $row["image"],
            "name" => $row["name"],
            "description" => $row["description"],
            "price" => $row["price"],
            "quantity" => $row["quantity"],
            "category_id" => $row["category_id"]
        );
    }

    return null;
}

function update_product($product)
{
    global $pdo;
    $sql = "UPDATE PRODUCTS SET IMAGE=:image, NAME=:name, DESCRIPTION=:description, PRICE=:price, QUANTITY=:quantity, CATEGORY_ID=:category_id WHERE ID=:id";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id', $product['id']);
    $stmt->bindParam(':image', $product['image']);
    $stmt->bindParam(':name', $product['name']);
    $stmt->bindParam(':description', $product['description']);
    $stmt->bindParam(':price', $product['price']);
    $stmt->bindParam(':quantity', $product['quantity']);
    $stmt->bindParam(':category_id', $product['category_id']);

    $stmt->execute();
}

function search_product($nameProduct)
{
    global $pdo;
    $sql = "SELECT * FROM PRODUCTS  WHERE NAME LIKE :name";
    $stmt = $pdo->prepare($sql);
    $nameProductSearch = '%' . $nameProduct . '%';
    $stmt->bindParam(':name', $nameProductSearch);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả và xây dựng mảng tên sản phẩm
    $names = array();
    foreach ($result as $row) {
        $names[] = $row['name'];
    }

    return $names;
}

function update_product_quantity_by_id($product)
{
    global $pdo;

    $sqlGetQuantity = "SELECT quantity FROM PRODUCTS WHERE ID=:id";
    $stmtGetQuantity = $pdo->prepare($sqlGetQuantity);

    $stmtGetQuantity->bindParam(':id', $product['id']);
    $stmtGetQuantity->execute();

    $currentQuantity = $stmtGetQuantity->fetchColumn();
    $updateQuantity = $currentQuantity - $product['quantity'];


    $sql = "UPDATE PRODUCTS SET QUANTITY=:quantity WHERE ID=:id";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id', $product['id']);
    $stmt->bindParam(':quantity', $updateQuantity);

    $stmt->execute();
}

// lấy ra sản phẩm bao gôm cả tên loại của bảng category
function get_all_products_category()
{
    global $pdo;

    $sql = "SELECT PRODUCTS.*, CATEGORIES.NAME AS category_name
    FROM PRODUCTS
    LEFT JOIN CATEGORIES ON PRODUCTS.category_id = CATEGORIES.id";

    $stmt = $pdo->prepare($sql);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
    $productList = array();

    if (count($result) > 0) {
        // Hiển thị dữ liệu của bảng
        foreach ($result as $row) {
            $product = array(
                "id" => $row["id"],
                "image" => $row["image"],
                "name" => $row["name"],
                "description" => $row["description"],
                "price" => $row["price"],
                "quantity" => $row["quantity"],
                "category_name" => $row["category_name"]
            );
            array_push($productList, $product);
        }
    }

    return $productList;
}
