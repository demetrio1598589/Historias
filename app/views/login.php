<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../public/css/styles.css">
</head>
<body>
    <div class="formulario-login">
        <h2>Historias Web</h2>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form method="POST">
            <label>Usuario: <input type="text" name="usuario" required></label><br>
            <label>Contraseña: <input type="password" name="clave" required></label><br>
            <button type="submit">Ingresar</button>
            <a href="registro.php" class="btn-crear-cuenta">Crear cuenta</a>
        </form>
    </div>
</body>
</html>