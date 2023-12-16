<?php
require_once 'mysql.php';
$pdo = get_pdo();

function get_all_orders()
{
    global $pdo;

    $sql = "SELECT * FROM ORDERS";
    $stmt = $pdo->prepare($sql);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
    $orderList = array();

    if (count($result) > 0) {
        // Hiển thị dữ liệu của bảng
        foreach ($result as $row) {
            $order = array(
                "id" => $row["id"],
                "code" => $row["code"],
                "status" => $row["status"],
                "users_id" => $row["users_id"],
                "address" => $row["address"],
                "phone" => $row["phone"],
                "date" => $row["date"],
            );
            array_push($orderList, $order);
        }
    }
    return $orderList;
}

function delete_order($orders_id)
{
    global $pdo;

    $sql = "DELETE FROM ORDERS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $orders_id);

    $stmt->execute();
}

function insert_order($orders)
{
    global $pdo;
    $sql = "INSERT INTO orders (code, status, users_id, address, phone, date) VALUES (:code, :status, :users_id, :address, :phone, :date)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':code', $orders['code']);
    $stmt->bindParam(':status', $orders['status']);
    $stmt->bindParam(':users_id', $orders['users_id']);
    $stmt->bindParam(':address', $orders['address']);
    $stmt->bindParam(':phone', $orders['phone']);
    $stmt->bindParam(':date', $orders['date']);

    $stmt->execute();

    // In ra ID của đơn hàng vừa được tạo
    return $pdo->lastInsertId();
}


function get_order($orders_id)
{
    global $pdo;

    $sql = "SELECT * FROM ORDERS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $orders_id);


    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row) {
        return array(
            'id' => $row['id'],
            'code' => $row['code'],
            'status' => $row['status'],
            'users_id' => $row['users_id'],
            'address' => $row['address'],
            'phone' => $row['phone'],
            'date' => $row['date'],
        );
    }

    return null;
}

function update_order($order)
{
    global $pdo;
    $sql = "UPDATE ORDERS SET CODE=:code, STATUS=:status, USERS_ID=:users_id, ADDRESS=:address, PHONE=:phone, DATE=:date WHERE ID=:id";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id', $order['id']);
    $stmt->bindParam(':code', $order['code']);
    $stmt->bindParam(':status', $order['status']);
    $stmt->bindParam(':users_id', $order['users_id']);
    $stmt->bindParam(':address', $order['address']);
    $stmt->bindParam(':phone', $order['phone']);
    $stmt->bindParam(':date', $order['date']);

    $stmt->execute();
}
function get_orders_by_date($date)
{
    global $pdo;

    $sql = "SELECT * FROM ORDERS WHERE date >= :dateFrom AND date <= :dateArrive";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':dateFrom', $date['dateFrom']);
    $stmt->bindParam(':dateArrive', $date['dateArrive']);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
    $orderList = array();

    if (count($result) > 0) {
        // Hiển thị dữ liệu của bảng
        foreach ($result as $row) {
            $order = array(
                "id" => $row["id"],
                "code" => $row["code"],
                "status" => $row["status"],
                "users_id" => $row["users_id"],
                "address" => $row["address"],
                "phone" => $row["phone"],
                "date" => $row["date"],
            );
            array_push($orderList, $order);
        }
    }
    return $orderList;
}