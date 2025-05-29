<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Historias WEB - Crear Cuenta</title>
    <link rel="stylesheet" href="<?php echo PUBLIC_URL; ?>css/styles.css">
</head>
<body>
    <div class="formulario-registrar">
        <h2>Únete a Historias WEB</h2>
        <p class="welcome-message">Crea una cuenta para disfrutar de todos nuestros cuentos infantiles y muchas sorpresas más.</p>
        
        <ul class="benefits-list">
            <li>📖 Acceso a cientos de cuentos infantiles</li>
            <li>🌟 Guarda tus historias favoritas</li>
            <li>✏️ Crea y comparte tus propios cuentos</li>
            <li>🎁 Sorpresas y premios especiales</li>
        </ul>
        
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        
        <form method="POST" action="">
            <label>Nombre: <input type="text" name="nombre" required></label>
            <label>Apellidos: <input type="text" name="apellidos"></label>
            <label>Email: <input type="email" name="email" required></label>
            <label>Usuario: <input type="text" name="usuario" required></label>
            <label>Contraseña: <input type="password" name="clave" required></label>
            <button type="submit">Registrarse</button>
            <a href="<?php echo LOGIN_URL; ?>" class="btn-crear-cuenta">Volver al login</a>
        </form>
    </div>
</body>
</html>