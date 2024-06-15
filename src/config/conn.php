<?php

session_start();

define('BASEURL', 'http://localhost/app-inventori-barang/src');

$host = "localhost";
$username = "root";
$password = "root";
$database = "app_inventori_barang";

// koneksi ke database
$connection = new mysqli($host, $username, $password, $database);

// cek koneksi database
if ($connection->connect_errno) {
    echo "Gagal terkoneksi ke database: " . $connection->connect_error;
    exit();
}
