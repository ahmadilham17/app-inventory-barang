<?php

require_once '../config/conn.php';

function selectAllCategory()
{
    global $connection;
    $sql = "SELECT * FROM categories";
    return $connection->query($sql);
}

function selectCategorykById($id)
{
    global $connection;
    $sql = "SELECT * FROM categories WHERE id = $id";
    $result = $connection->query($sql);
    return $result->fetch_assoc();
}

function deleteCategory($id)
{
    global $connection;
    $sql = "DELETE FROM categories WHERE id = $id";
    return $connection->query($sql);
}

function createCategory($data)
{
    $total = $data['stock'];

    global $connection;
    $sql = "INSERT INTO categories VALUES(NULL, '$total', NOW(), NOW())";
    return $connection->query($sql);
}
