<?php require_once 'check_session.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia Individual</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar">
                <ul class="nav-left">
                    <li><a href="<?php echo HOME_URL; ?>"><i class="fas fa-home"></i> Inicio</a></li>
                    <li><a href="<?php echo HISTORIAS_URL; ?>lista.php"><i class="fas fa-list"></i> Lista</a></li>
                    <li><a href="<?php echo HISTORIAS_URL; ?>nosotros.php"><i class="fas fa-book-open"></i> Acerca de nosotros</a></li>
                </ul>
                <?php if(isset($_SESSION['usuario'])): ?>
                    <ul class="nav-right">
                        <li>
                            <span><i class="fas fa-user"></i> 
                                <?php echo htmlspecialchars($_SESSION['nombre']); ?>
                                <?php if (!empty($_SESSION['apellidos'])): ?>
                                    <?php echo ' ' . htmlspecialchars($_SESSION['apellidos']); ?>
                                <?php endif; ?>
                            </span>
                            <a href="<?php echo LOGOUT_URL; ?>" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                <?php endif; ?>
            </nav>
        </div>
    </header>

    <main id="historia-individual">
        <section class="historia-completa">
            <iframe src="https://player.vimeo.com/video/62549628" width="800" height="450" 
                    title="Video de Vimeo"
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>
            </iframe>
            <div style="font-family: Arial, sans-serif; max-width: 600px;">
                <h2>Resumen de <span style="color: red;">RWBY</span></h2>
                <p><strong>RWBY</strong> es una serie animada de acción y fantasía creada por Monty Oum. Ambientada en el mundo de <em>Remnant</em>, la historia sigue a cuatro jóvenes cazadoras en entrenamiento: <strong>Ruby, Weiss, Blake y Yang</strong>, quienes luchan contra criaturas llamadas <strong>Grimm</strong> y descubren una conspiración liderada por una villana inmortal llamada <strong>Salem</strong>.</p>
                <p>Con armas únicas y poderes especiales llamados <em>Semblanzas</em>, el equipo <strong>RWBY</strong> enfrenta peligros, secretos antiguos y conflictos morales mientras defienden a la humanidad.</p>
            </div>

            <p>
                Únete a nuestra comunidad y deja que la magia de los cuentos transforme cada día en una aventura inolvidable.
            </p>
            <div class="botones-navegacion">
                <button onclick="window.scrollTo({top: 0, behavior: 'smooth'});">
                    <i class="fas fa-arrow-up"></i> Arriba
                </button>
                <button onclick="window.location.href='<?php echo HOME_URL; ?>';">
                    <i class="fas fa-home"></i> Portada
                </button>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Historias Web. Todos los derechos reservados.</p>
        <p>Demetrio Quispe Chavez ©</p>
        <div class="redes-sociales">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
</body>
</html>