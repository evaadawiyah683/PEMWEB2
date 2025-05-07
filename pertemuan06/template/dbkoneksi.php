<?php

$host = "localhost";
$database = "direktor_umkm";
$username = "root";
$password = "";
$chartset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$database;charset=$chartset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
$pdo = new PDO($dsn, $username, $password, $options);

// Cek koneksi
try {
    $db = new PDO($dsn, $username, $password, $options);
     echo "Koneksi berhasil!";
} catch (\Throwable $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}