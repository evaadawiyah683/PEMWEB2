<?php
// 1) variabel untuk koneksi database
$host = "localhost";
$dbname = "dbhospital";
$username = "root";
$password = "";
$charset = "utf8mb4";

// 2) Buat DSN dan opsi akses database
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,

];

// 3) Buat koneksi ke database
$dbh = new PDO($dsn, $username, $password, $options);
?>