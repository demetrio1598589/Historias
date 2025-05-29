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

    public function crear($datos) {
        // Verificar si el usuario ya existe
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE usuario = ? OR email = ?");
        $stmt->execute([$datos['usuario'], $datos['email']]);
        if ($stmt->fetch()) {
            return false;
        }

        // Crear nuevo usuario con todos los campos
        $stmt = $this->pdo->prepare("INSERT INTO usuarios (nombre, apellidos, email, usuario, password) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([
            $datos['nombre'],
            $datos['apellidos'],
            $datos['email'],
            $datos['usuario'],
            $datos['password']
        ]);
    }
}