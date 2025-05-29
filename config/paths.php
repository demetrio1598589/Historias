<?php
// Definir constantes de rutas base
define('BASE_URL', '/DEM/');
define('APP_URL', BASE_URL . 'Historias/app/');
define('PUBLIC_URL', BASE_URL . 'Historias/public/');
define('HISTORIAS_URL', BASE_URL . 'Historias/Historias/');
define('REGISTER_URL', PUBLIC_URL . 'registro.php');

// Rutas del sistema
define('APP_PATH', __DIR__ . '/../app/');
define('CONTROLLERS_PATH', APP_PATH . 'controllers/');
define('MODELS_PATH', APP_PATH . 'models/');
define('VIEWS_PATH', APP_PATH . 'views/');

// Rutas específicas
define('LOGIN_URL', PUBLIC_URL . 'index.php');
define('LOGOUT_URL', PUBLIC_URL . 'logout.php');
define('HOME_URL', HISTORIAS_URL . 'indexhistoria.php');