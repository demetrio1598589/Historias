<?php
require_once __DIR__ . '/../config/paths.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';

session_start();

// Solo iniciar sesión si no está ya activa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Redirigir si ya está autenticado
if (isset($_SESSION['usuario'])) {
    header('Location: ' . HOME_URL);
    exit();
}

// Mostrar mensaje de logout exitoso
if (isset($_GET['logout'])) {
    $mensaje = "Has cerrado sesión correctamente.";
}

$auth = new AuthController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $auth->login();
} else {
    include __DIR__ . '/../app/views/login.php';
}