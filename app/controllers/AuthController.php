<?php
require_once __DIR__ . '/../../config/paths.php';
require_once __DIR__ . '/../models/User.php';

class AuthController {
    public function login() {
        $user = new User();
        $usuario = $_POST['usuario'] ?? '';
        $clave = $_POST['clave'] ?? '';

        $resultado = $user->validar($usuario, $clave);

        if ($resultado) {
            $_SESSION['usuario'] = $resultado['usuario'];
            $_SESSION['user_id'] = $resultado['id'];
            $_SESSION['nombre'] = $resultado['nombre'];  // Corregir: usar $resultado en lugar de $usuario
            $_SESSION['apellidos'] = $resultado['apellidos'];
            $_SESSION['email'] = $resultado['email'];
            header('Location: ' . HOME_URL);
            exit();
        } else {
            $error = "Usuario o contraseña incorrectos.";
            include __DIR__ . '/../views/login.php';
        }
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = new User();
            $datos = [
                'nombre' => $_POST['nombre'] ?? '',
                'apellidos' => $_POST['apellidos'] ?? '',
                'email' => $_POST['email'] ?? '',
                'usuario' => $_POST['usuario'] ?? '',
                'password' => $_POST['clave'] ?? ''
            ];

            if ($user->crear($datos)) {
                $resultado = $user->validar($datos['usuario'], $datos['password']);
                if ($resultado) {
                    $_SESSION['usuario'] = $resultado['usuario'];
                    $_SESSION['user_id'] = $resultado['id'];
                    $_SESSION['nombre'] = $resultado['nombre'];
                    $_SESSION['apellidos'] = $resultado['apellidos'];
                    $_SESSION['email'] = $resultado['email'];
                    header('Location: ' . HOME_URL);
                    exit();
                }
            } else {
                $error = "Error al crear la cuenta. El usuario ya existe.";
                include __DIR__ . '/../views/registro_form.php';
            }
        } else {
            include __DIR__ . '/../views/registro_form.php';
        }
    }
}