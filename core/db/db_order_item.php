<?php
require_once 'mysql.php';
$pdo = get_pdo();

function get_all_order_items()
{
    global $pdo;

    $sql = "SELECT * FROM ORDER_ITEMS";
    $stmt = $pdo->prepare($sql);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
    $orderItemsList = array();


    if (count($result) > 0) {
        // Hiển thị dữ liệu của bảng
        foreach ($result as $row) {
            $orderItems = array(
                "id" => $row["id"],
                "orders_id" => $row["orders_id"],
                "products_id" => $row["products_id"],
                "quantity" => $row["quantity"],
                "price" => $row["price"],
            );
            array_push($orderItemsList, $orderItems);
        }
    }

    return $orderItemsList;
}

function delete_order_items($order_items_id)
{
    global $pdo;

    $sql = "DELETE FROM ORDER_ITEMS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $order_items_id);

    $stmt->execute();
}

function insert_order_items($order_items)
{
    global $pdo;
    $sql = "INSERT INTO ORDER_ITEMS(ID, ORDERS_ID, PRODUCTS_ID, QUANTITY, PRICE) VALUES(NULL, :orders_id, :product_id, :quantity, :price)";
    $stmt = $pdo->prepare($sql);


    $stmt->bindParam(':orders_id', $order_items['orders_id']);
    $stmt->bindParam(':product_id', $order_items['product_id']);
    $stmt->bindParam(':quantity', $order_items['quantity']);
    $stmt->bindParam(':price', $order_items['price']);

    $stmt->execute();
}

function get_order_items($order_items_id)
{
    global $pdo;

    $sql = "SELECT * FROM ORDER_ITEMS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $order_items_id);


    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row) {
        return array(
            'id' => $row['id'],
            $stmt->bindParam(':order_id', $order_items_id['order_id']),
            $stmt->bindParam(':product_id', $order_items_id['product_id']),
            $stmt->bindParam(':quantity', $order_items_id['quantity']),
            $stmt->bindParam(':price', $order_items_id['price']),
        );
    }

    return null;
}

function update_order_items($order_items)
{
    global $pdo;
    $sql = "UPDATE order_items SET ORDER_ID=:order_id, PRODUCT_ID=:order_id, QUANTITY=:quantity, PRICE=:price WHERE ID=:id";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id', $order_items['id']);
    $stmt->bindParam(':order_id', $order_items['order_id']);
    $stmt->bindParam(':product_id', $order_items['product_id']);
    $stmt->bindParam(':quantity', $order_items['quantity']);
    $stmt->bindParam(':price', $order_items['price']);

    $stmt->execute();
}
