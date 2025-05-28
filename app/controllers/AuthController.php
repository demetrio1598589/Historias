<?php
require_once __DIR__ . '/../models/User.php';

class AuthController {
    public function login() {
        session_start();
        if (isset($_SESSION['usuario'])) {
            header('Location: ../Historias/index.php');
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = new User();
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];

            $resultado = $user->validar($usuario, $clave);

            if ($resultado) {
                $_SESSION['usuario'] = $resultado['usuario'];
                $_SESSION['user_id'] = $resultado['id'];
                header('Location: ../Historias/index.php');
                exit();
            } else {
                $error = "Usuario o contraseña incorrectos.";
                include '../app/views/login.php';
            }
        } else {
            include '../app/views/login.php';
        }
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = new User();
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];

            if ($user->crear($usuario, $clave)) {
                header('Location: login.php');
                exit();
            } else {
                $error = "Error al crear la cuenta. El usuario ya existe.";
                include '../app/views/registro.php';
            }
        } else {
            include '../app/views/registro.php';
        }
    }
}