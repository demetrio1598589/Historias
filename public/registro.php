<?php
require_once __DIR__ . '/../config/paths.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';

// Iniciar sesión si no está activa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Redirigir si ya está autenticado
if (isset($_SESSION['usuario'])) {
    header('Location: ' . HOME_URL);
    exit();
}

$auth = new AuthController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $auth->register();
} else {
    // Mover el formulario HTML a un archivo separado en views
    include __DIR__ . '/../app/views/registro_form.php';
}
?>
