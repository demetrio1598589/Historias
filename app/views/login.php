<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Historias WEB - Iniciar Sesión</title>
    <link rel="stylesheet" href="<?php echo PUBLIC_URL; ?>css/styles.css">
</head>
<body>
    <div class="formulario-login">
        <h2>Historias WEB</h2>
        <p class="welcome-message">¡Bienvenido al mundo mágico de los cuentos infantiles! Inicia sesión para descubrir historias increíbles.</p>
        
        <?php 
        if (isset($error)) echo "<p style='color:red;'>$error</p>"; 
        if (isset($mensaje)) echo "<p style='color:green;'>$mensaje</p>"; 
        ?>
        
        <form method="POST" action="<?php echo LOGIN_URL; ?>">
            <label>Usuario: <input type="text" name="usuario" required></label><br>
            <label>Contraseña: <input type="password" name="clave" required></label><br>
            <button type="submit">Ingresar</button>
            <a href="<?php echo REGISTER_URL; ?>" class="btn-crear-cuenta">Crear cuenta</a>
        </form>
    </div>
</body>
</html>