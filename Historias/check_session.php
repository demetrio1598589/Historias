<?php
require_once __DIR__ . '/../config/paths.php';

session_start();
if (!isset($_SESSION['usuario']) || !isset($_SESSION['nombre'])) {
    header('Location: ' . LOGIN_URL);
    exit();
}