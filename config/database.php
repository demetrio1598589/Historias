<?php
$host = 'localhost';
$db   = 'login_mvc';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
