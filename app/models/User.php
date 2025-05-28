<?php
require_once __DIR__ . '/../../config/database.php';

class User {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function validar($username, $password) {
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE usuario = ? AND password = ?");
        $stmt->execute([$username, $password]);
        return $stmt->fetch();
    }

    public function crear($username, $password) {
        // Verificar si el usuario ya existe
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE usuario = ?");
        $stmt->execute([$username]);
        if ($stmt->fetch()) {
            return false;
        }

        // Crear nuevo usuario
        $stmt = $this->pdo->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?)");
        return $stmt->execute([$username, $password]);
    }
}