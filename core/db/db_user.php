<?php
require_once 'mysql.php';
$pdo = get_pdo();

function get_all_user()
{
    global $pdo;

    $sql = "SELECT * FROM USERS";
    $stmt = $pdo->prepare($sql);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
    $userList = array();

    if (count($result) > 0) {
        foreach ($result as $row) {
            $user = array(
                "id" => $row['id'],
                "name" => $row['name'],
                "phone" => $row['phone'],
                "email" => $row['email'],
                "password" => $row['password'],
                "role" => $row['role'],
            );
            array_push($userList, $user);
        }
    }
    return $userList;

}

function delete_user($user_id)
{
    global $pdo;

    $sql = "DELETE FROM USERS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $user_id);

    $stmt->execute();
}

function insert_user($user)
{
    global $pdo;
    $sql = "INSERT INTO USERS(ID,NAME, PHONE, EMAIL, PASSWORD, ROLE) VALUES(NULL, :name, :phone, :email, :password, :role)";
    $stmt = $pdo->prepare($sql);


    $stmt->bindParam(':email', $user['email']);
    $stmt->bindParam(':name', $user['name']);
    $stmt->bindParam(':phone', $user['phone']);
    $stmt->bindParam(':password', $user['password']);
    $stmt->bindParam(':role', $user['role']);

    $stmt->execute();
}

function get_user($user_id)
{
    global $pdo;

    $sql = "SELECT * FROM USERS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $user_id);


    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row) {
        return array(
            "id" => $row['id'],
            "name" => $row['name'],
            "phone" => $row['phone'],
            "email" => $row['email'],
            "password" => $row['password'],
            "role" => $row['role'],
        );
    }

    return null;
}

function update_user($user)
{
    global $pdo;
    $sql = "UPDATE USERS SET NAME=:name, PHONE=:phone, EMAIL=:email, PASSWORD=:password, ROLE=:role WHERE ID=:id";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id', $user['id']);
    $stmt->bindParam(':name', $user['name']);
    $stmt->bindParam(':phone', $user['phone']);
    $stmt->bindParam(':email', $user['email']);
    $stmt->bindParam(':password', $user['password']);
    $stmt->bindParam(':role', $user['role']);
    $stmt->execute();
}

function get_user_by_email($email)
{
    global $pdo;

    $sql = "SELECT * FROM USERS WHERE EMAIL=:email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);


    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row) {
        return array(
            "id" => $row['id'],
            "name" => $row['name'],
            "phone" => $row['phone'],
            "email" => $row['email'],
            "password" => $row['password'],
            "role" => $row['role'],
        );
    }

    return null;
}
