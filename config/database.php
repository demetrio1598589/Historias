<?php
$host = 'localhost';
$db   = 'web_historias';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
    // Opcional: habilitar excepciones en errores de PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos '$db'.";
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
