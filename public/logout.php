<?php
require_once __DIR__ . '/../config/paths.php';

// Solo iniciar sesión si no está ya activa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


// Destruir completamente la sesión
$_SESSION = array();

// Borrar la cookie de sesión
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

// Redirigir al login con parámetro para evitar caché
header("Location: " . LOGIN_URL . "?logout=1");
exit();